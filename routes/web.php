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
    return view('welcome');
});
Route::get('/home','Studentcontroller@index');
Route::get('/home/add','Studentcontroller@create');
Route::post('/home/add','Studentcontroller@store');
Route::get('home/edit/{id}','Studentcontroller@edit');
Route::post('home/edit/{id}','Studentcontroller@update');
Route::get('home/delete/{id}','Studentcontroller@destroy');
