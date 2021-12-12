<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'signInPage']);
Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard/', [PageController::class, 'dashboardPage'])->name('dashboard');
    Route::get('/users/usersTable/', [PageController::class, 'usersTablePage'])->name('users');
    Route::get('/users/usersForm/', [PageController::class, 'usersFormPage'])->name('users.form');
    Route::get('/units/unitsTable/', [PageController::class, 'unitsTablePage'])->name('units');
    Route::get('/units/unitsForm/', [PageController::class, 'unitsFormPage'])->name('units.form');
    Route::post('/units/store/', [UsersManagementController::class, 'storeUnit']);
    Route::get('/traffic/', [PageController::class, 'trafficPage'])->name('traffic');
    Route::get('/report/', [PageController::class, 'reportPage'])->name('report');
    Route::get('/logout/', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/login/', [AuthController::class, 'signInPage'])->name('login');
Route::post('/signin/', [AuthController::class, 'signIn'])->name('signin');
