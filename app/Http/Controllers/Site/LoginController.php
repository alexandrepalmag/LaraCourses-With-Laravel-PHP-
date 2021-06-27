<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Course;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index');
    }

    public function enter(Request $req)
    {

        $datas = $req->all();

        if (Auth::attempt(['email' => $datas['email'], 'password' => $datas['password']])) {

            return redirect()->route('admin.courses');
        }

        return redirect()->route('login.index');
    }

    public function exit()
    {

        Auth::logout();

        return redirect()->route('site.home');
    }
}
