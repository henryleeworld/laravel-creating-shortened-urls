<?php

use App\Http\Controllers\ShortenedUrlsController;
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

Route::get('shortened-urls/generate', [ShortenedUrlsController::class, 'index']);
Route::post('shortened-urls/generate', [ShortenedUrlsController::class, 'store'])->name('shortened-url.generate.post');
Route::get('shortened-urls/{code}', [ShortenedUrlsController::class, 'redirectUrl'])->name('shortened-url.redirect');
