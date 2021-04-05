<?php

use App\Http\Controllers\MainController;
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



// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('edit_page',[MainController::class,'show'])->middleware('auth');;
Route::get('edit/{id}',[MainController::class,'showData'])->middleware('auth');;
Route::get('/',[MainController::class,'index']);
Route::post('edit',[MainController::class,'update'])->middleware('auth');;

Auth::routes();
Route::get('/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout']);


