<?php

use Illuminate\Support\Facades\Route;
use App\Mail\first_email;
use App\Http\Controllers\controller;
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
Route::get('/dashboard', [controller::class , 'views'])->name('dashboard');
//Route::post('/dashboard', [controller::class , 'nnn'])->name('mail');  
if (App::environment('local')){
    Route::post('/dash', [controller::class , 'voo'])->name('mail');
}