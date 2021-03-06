<?php

use App\Http\Controllers\DataRujukanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiVaksinController;
use App\Http\Controllers\StatitiskaController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/statitiska', [StatitiskaController::class, 'index']);
Route::get('/rumah-sakit-rujukan', [DataRujukanController::class, 'index']);
Route::get('/registrasi-vaksinasi', [RegistrasiVaksinController::class, 'index']);
Route::post('/registrasi-vaksinasi/post', [RegistrasiVaksinController::class, 'store']);
Route::post('/registrasi-vaksinasi/show', [RegistrasiVaksinController::class, 'show']);
