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

Route::get('/', function () {
    return view('student-search');
});
Route::get('student','StudentsController@index');
Route::get('student-enrolled1','SubjectsEnrolledController@index');
Route::get('student-search','SubjectsEnrolledController@show');
Route::post('student-enrolled','SubjectsEnrolledController@store');
Route::get('subjects','SubjectsController@index');
