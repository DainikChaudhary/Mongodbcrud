<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajaxcontroller;

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


Route::get('/show',[ajaxcontroller::class,'index']);
Route::post('/insert',[ajaxcontroller::class,'insertdata']);
Route::get('/fetch',[ajaxcontroller::class,'fetch']);
Route::get('/fetch/{id}',[ajaxcontroller::class,'destroy']);
Route::get('/edit/{id}',[ajaxcontroller::class,'edit']);
Route::post('/update',[ajaxcontroller::class,'update']);
