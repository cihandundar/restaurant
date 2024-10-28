<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class,'showHome']);

Route::get('/menu', [DataController::class, 'menuPage'])->name('menu');

Route::get('/about', [DataController::class, 'aboutUs'])->name('about');

Route::get('/blog', action: [DataController::class, 'blog'])->name('blog');

Route::get(uri: '/contact', action: [DataController::class, 'contact'])->name('contact');



