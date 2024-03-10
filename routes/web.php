<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login-post', [AuthController::class, 'loginPost'])->name('auth.login-post');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register-post', [AuthController::class, 'registerPost'])->name('auth.register-post');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::prefix('admin')->middleware(['check_role'])->group(function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
	Route::get('/employees', [EmployeeController::class, 'index'])->name('admin.employee.index');
	Route::get('/create-employees', [EmployeeController::class, 'create'])->name('admin.employee.create');
	Route::post('/store-employees', [EmployeeController::class, 'store'])->name('admin.employee.store');
	Route::get('/edit-employees/{id}', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
	Route::post('/update-employees/{id}', [EmployeeController::class, 'update'])->name('admin.employee.update');
	Route::delete('/destroy-employees/{id}', [EmployeeController::class, 'destroy'])->name('admin.employee.destroy');
});
