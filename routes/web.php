<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class,'showHome']);

Route::get('/menu', [DataController::class, 'menuPage'])->name('menu');



