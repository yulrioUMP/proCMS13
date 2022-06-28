<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read']);

Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category']);

Route::resource('categories', CategoryController::class);
Route::resource('contents', ContentController::class);
