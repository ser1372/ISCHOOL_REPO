<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::prefix('{locale?}')->group(function () {
    Route::get('/', function () {
        return view('layouts.master');
    });

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/login',function(){
        return view('layouts.admin');
    });
});
