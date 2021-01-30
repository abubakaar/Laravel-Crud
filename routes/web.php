<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\comments;
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
// })->name('O');
//<a href="{{route('/')}}"> Add New Comment </a>
//Route::view('/', 'main');
Route::resource('post', CRUD::class);
Route::resource('comments', comments::class);
Route::get('ANC/{id}',[comments::class,'ANC'])->name('comments.ANC');
Route::get('Deletepost/{id}',[comments::class,'Deletepost'])->name('comments.Deletepost');
