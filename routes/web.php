<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MenuController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

Route::post('/contattaci', [PublicController::class, 'contactUsForm'])->name('contactUsForm');




Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create')->middleware('auth');

Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store')->middleware('auth');

Route::get('/menu/index', [MenuController::class, 'index'])->name('menu.index');