<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('home', compact('courses'));
    }
}
