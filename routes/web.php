<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdUserController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterdUserController::class, 'create']);

//==========================================
Route::view('/index', 'index');
