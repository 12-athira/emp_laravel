<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

Route::get('/',[AddController::class,'index']);
Route::get('/create',[AddController::class,'create']);
Route::post('/store',[AddController::class,'store']);

Route::get('/show/{id}',[AddController::class,'show']);

Route::get('/edit/{id}',[AddController::class,'edit']);
Route::post('/update/{id}',[AddController::class,'update']);

Route::get('/delete/{id}',[AddController::class,'delete']);
