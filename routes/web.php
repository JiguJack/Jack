<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// MAIN PAGE
Route::get('/', [UserController::class, 'show'])->name('homepage');

// USER SIGN UP
Route::get('/register', [UserController::class, 'index']);

// VIEW USERS
Route::post('/register', [UserController::class, 'register']);

//USER LOGIN
Route::get('/login', [LoginController::class, 'loginUser']);

// DELETE USER
Route::get('/user/delete/{userid}',[UserController::class, 'destroy'])->name('delete.user');

// GET USER DATA FOR UPDATE
Route::get('/user/update/{userid}',[UserController::class, 'showupdate'])->name('showupdate.user');

// UPDATE USER
Route::post('/user/update/{userid}', [UserController::class, 'update'])->name('updated.user');