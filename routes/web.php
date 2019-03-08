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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('hello');
// });

// Route::get('/heru', function () {
//     return "Hello Nama Saya Heru";
// });

Route::get('/', 'HomeController@index');

Route::get('/department', 'DepartmentController@index');
Route::get('/position', 'PositionController@index');

Route::get('/employee', 'EmployeeController@index');

Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');

Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/update', 'EmployeeController@update');

Route::get('/employee/delete/{id}', 'EmployeeController@destroy');