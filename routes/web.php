<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index'])->name('index');
Route::post('/', [TodoController::class,'store'])->name('store');
Route::patch('/{todo}', [TodoController::class,'update'])->name('update');
Route::delete('/{todo}', [TodoController::class,'destroy'])->name('destroy');
