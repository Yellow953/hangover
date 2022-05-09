<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/portfolio/{user}', [App\Http\Controllers\PortfolioController::class, 'show']);

Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('createdrink');
Route::post('/menu', [App\Http\Controllers\MenuController::class, 'store']);
Route::get('/menu/{drink}/edit', [App\Http\Controllers\MenuController::class, 'edit']);
Route::get('/menu/{drink}', [App\Http\Controllers\MenuController::class, 'show']);
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/userTable', [App\Http\Controllers\AdminController::class, 'userTable']);
Route::get('/admin/drinkTable', [App\Http\Controllers\AdminController::class, 'drinkTable']);

Route::get('/deleteUser/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);
Route::get('/deleteDrink/{id}', [App\Http\Controllers\AdminController::class, 'deleteDrink']);
