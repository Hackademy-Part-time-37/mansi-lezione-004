<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/dettaglio-articolo/{article}', [PageController::class, 'detail'])->name('dettaglio');
