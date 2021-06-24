<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contact/{id?}', ['ContactController@index']);

//Route::get('/contact/{id?}', 'App\Http\Controllers\ContactController@index');

Route::get('/contact/{id?}', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'criar']);

Route::put('/contact', [ContactController::class, 'editar']);

Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses');
Route::get('/admin/courses/add', [CourseController::class, 'add'])->name('admin.courses.add');
Route::post('/admin/courses/save', [CourseController::class, 'save'])->name('admin.courses.save');
Route::get('/admin/courses/edit/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('/admin/courses/update/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
Route::get('/admin/courses/delete/{id}', [CourseController::class, 'delete'])->name('admin.courses.delete');
