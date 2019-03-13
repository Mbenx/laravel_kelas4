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
Route::get('/department/show/{id}', 'DepartmentController@show');

Route::get('/department/create', 'DepartmentController@create');
Route::post('/department/store', 'DepartmentController@store');

Route::get('/department/edit/{id}', 'DepartmentController@edit');
Route::put('/department/update', 'DepartmentController@update');

Route::get('/department/delete/{id}', 'DepartmentController@destroy');

Route::get('/position', 'PositionController@index');
Route::get('/position/show/{id}', 'PositionController@show');

Route::get('/position/create', 'PositionController@create');
Route::post('/position/store', 'PositionController@store');

Route::get('/position/edit/{id}', 'PositionController@edit');
Route::put('/position/update', 'PositionController@update');

Route::get('/position/delete/{id}', 'PositionController@destroy');

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/show/{id}', 'EmployeeController@show');

Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');

Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/update', 'EmployeeController@update');

Route::get('/employee/delete/{id}', 'EmployeeController@destroy');

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/show/{id}', 'InventoryController@show');

Route::get('/inventory/create', 'InventoryController@create');
Route::post('/inventory/store', 'InventoryController@store');

Route::get('/inventory/edit/{id}', 'InventoryController@edit');
Route::put('/inventory/update', 'InventoryController@update');

Route::get('/inventory/delete/{id}', 'InventoryController@destroy');

Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/show/{id}', 'ArchiveController@show');

Route::get('/archive/create', 'ArchiveController@create');
Route::post('/archive/store', 'ArchiveController@store');

Route::get('/archive/edit/{id}', 'ArchiveController@edit');
Route::put('/archive/update', 'ArchiveController@update');

Route::get('/archive/delete/{id}', 'ArchiveController@destroy');

