<?php

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

Route::get('/', 'App\Http\Controllers\CoursesController@all');
Route::get('/{id}', 'App\Http\Controllers\CoursesController@view');
Route::post('/add-student', 'App\Http\Controllers\StudentController@create');
Route::post('/add-professor', 'App\Http\Controllers\ProfesorController@create');
