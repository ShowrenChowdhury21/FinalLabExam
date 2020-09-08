<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/login', 'logincontroller@index')->name('login.index');
Route::post('/login', ['uses'=>'logincontroller@verify']);

Route::get('/adminhome', 'adminhomecontroller@index')->name('admin.index');
Route::get('/adminhome/create', 'adminhomecontroller@create')->name('admin.create');
Route::post('/adminhome/save', 'adminhomecontroller@store');
Route::get('/adminhome/edit/{id}', 'adminhomecontroller@edit')->name('admin.edit');
Route::post('/adminhome/edit/{id}', 'adminhomecontroller@update');
Route::get('/adminhome/delete/{id}', 'adminhomecontroller@delete')->name('admin.delete');

route::get('/employerhome','employeecontroller@index')->name('employer.index');
Route::get('/employerhome/create', 'employeecontroller@create')->name('employer.create');
Route::get('/employerhome/edit/{id}', 'employeecontroller@edit')->name('employer.edit');
Route::get('/employerhome/delete/{id}', 'employeecontroller@delete')->name('employer.delete');
Route::post('/employerhome/save', 'employeecontroller@store');
Route::post('/employerhome/edit/{id}', 'employeecontroller@update');

Route::get('/registration', 'registrationcontroller@index')->name('registration.index');
Route::post('/registration', 'registrationcontroller@store');
