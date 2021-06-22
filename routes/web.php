<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin;

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

Route::get('admin/courses', ['as' => 'admin.courses', CourseController::class, 'index']);
Route::get('admin/courses/add', ['as' => 'admin.courses.add', CourseController::class, 'add']);
Route::post('admin/courses/save', ['as' => 'admin.courses.save', CourseController::class, 'save']);
Route::get('admin/courses/edit/{id}', ['as' => 'admin.courses.edit', CourseController::class, 'edit']);
Route::put('admin/courses/update/{id}', ['as' => 'admin.courses.update', CourseController::class, 'update']);
Route::get('admin/courses/delete/{id}', ['as' => 'admin.courses.delete', CourseController::class, 'delete']);
