<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index()
    {

        $registers = Course::all();
        return view('admin.courses.index', compact('registers'));
    }

    public function add()
    {
        return view('admin.courses.add');
    }

    public function save(Request $req)
    {
        $datas = $req->all();

        if (isset($datas['published'])) {

            $datas['published'] = 'Yes';
        } else {

            $datas['published'] = 'No';
        }

        if ($req->hasFile('image')) {

            $image = $req->file('image');
            $randomnumber = rand(1111, 9999);
            $dir = "img/courses/";
            $extension = $image->guessClientExtension();
            $imagename = "image_" . $randomnumber . "." . $extension;
            $image->move($dir, $imagename);
            $datas['image'] = $dir . "/" . $imagename;
        }

        Course::create($datas);

        return redirect()->route('admin.courses');
    }

    public function edit($id)
    {

        $register = Course::find($id);

        return view('admin.courses.edit', compact('register'));
    }

    public function update(Request $req, $id)
    {
        $datas = $req->all();

        if (isset($datas['published'])) {

            $datas['published'] = 'Yes';
        } else {

            $datas['published'] = 'No';
        }

        if ($req->hasFile('image')) {

            $image = $req->file('image');
            $randomnumber = rand(1111, 9999);
            $dir = "img/courses/";
            $extension = $image->guessClientExtension();
            $imagename = "image_" . $randomnumber . "." . $extension;
            $image->move($dir, $imagename);
            $datas['image'] = $dir . "/" . $imagename;
        }

        Course::find($id)->update($datas);

        return redirect()->route('admin.courses');
    }

    public function delete($id)
    {
        Course::find($id)->delete();

        return redirect()->route('admin.courses');
    }
}
