<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComplaintsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/dashboard", [HomeController::class, 'adminDashboard'])->name("admin.dashboard");
    Route::get('/admin/complaints', [ComplaintsController::class, 'adminComplaints'])->name("admin.complaints");
});

// Route CSR
Route::middleware(['auth', 'user-role:csr'])->group(function () {
    Route::get("/csr/dashboard", [HomeController::class, 'csrDashboard'])->name("csr.dashboard");
    Route::get('/csr/complaints', [ComplaintsController::class, 'csrComplaints'])->name("csr.complaints");
});

Route::get('/logout', [HomeController::class, 'logout']);
