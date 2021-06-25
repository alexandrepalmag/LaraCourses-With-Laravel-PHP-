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
        dd($datas);
    }

    public function edit()
    {
        return "Add function";
    }

    public function update()
    {
        return "Add function";
    }

    public function delete()
    {
        return "Add function";
    }
}
