<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/internet-services', [HomeController::class, 'internet'])->name('internet');
Route::get('/vpn-services', [HomeController::class, 'vpn'])->name('vpn');
<<<<<<< HEAD
Route::get('/manage-services', [HomeController::class, 'manage'])->name('manage');
Route::get('/triple-play-services', [HomeController::class, 'tripleplay'])->name('tripleplay');
Route::get('/neutral-host-infrastructure', [HomeController::class, 'neutralhost'])->name('neutralhost');
=======
Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('sendEmail');
>>>>>>> origin/master
