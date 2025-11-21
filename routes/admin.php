<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

// Dashboard del panel de administración
Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');   // No need for 'admin.' prefix - it's added automatically

// CRUD de Roles
Route::resource('roles', RoleController::class)
    ->names('roles');
