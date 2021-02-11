<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('courses', 'App\Http\Controllers\CoursesController@getAll');
Route::get('courses/{id}', 'App\Http\Controllers\CoursesController@getById');
Route::get('students', 'App\Http\Controllers\StudentController@getAll');
Route::get('students/{id}', 'App\Http\Controllers\StudentController@getById');
Route::post('students', 'App\Http\Controllers\StudentController@saveStudent');
Route::post('professors', 'App\Http\Controllers\ProfesorController@save');
Route::delete('students/{id}', 'App\Http\Controllers\StudentController@delete');
Route::delete('professors/{id}', 'App\Http\Controllers\ProfesorController@delete');
