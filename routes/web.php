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
$dir = 'App\Http\Controllers\todoController' ; 

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tasks/create',$dir.'@store')->name('store') ; 

Route::get('/',$dir.'@index')->name('index') ; 

Route::delete('/tasks/delete/{id}',$dir.'@destroy')->name('destroy') ; 