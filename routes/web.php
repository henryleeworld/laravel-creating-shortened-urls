<?php

use App\Http\Controllers\ShortenedUrlsController;
use Illuminate\Support\Facades\Route;

Route::get('shortened-urls/generate', [ShortenedUrlsController::class, 'index']);
Route::post('shortened-urls/generate', [ShortenedUrlsController::class, 'store'])->name('shortened-url.generate.post');
Route::get('shortened-urls/{code}', [ShortenedUrlsController::class, 'redirectUrl'])->name('shortened-url.redirect');
