<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[VideoController::class,'index']);

Route::get('/registr',function(){
    return view('registr');
});

Route::get('/auth',function(){
    return view('auth');
});
Route::get('/logout',[UserController::class,'logout']);

