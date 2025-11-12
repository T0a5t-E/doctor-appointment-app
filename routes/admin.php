<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

// Usuarios CRUD
Route::resource('users', UsersController::class)->names('users');
