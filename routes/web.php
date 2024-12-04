<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index']);
Route::post('/post-login', [LoginController::class, 'postLogin'])->name('post.login');

Route::middleware(['auth', 'role:Admin,Manager'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/roles-assign', [UserController::class, 'assignePermission'])->name('roles.assign');
    Route::post('/store-role-permission', [UserController::class, 'storeRolePermission'])->name('store.role.permission');
    Route::get('/edit-permission/{id}', [UserController::class, 'editPermission'])->name('edit.permission');
    Route::post('/update-role-permission', [UserController::class, 'updateRolePermission'])->name('update.role.permission');
});

