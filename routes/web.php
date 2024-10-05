<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelanggaranController;
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

//Route::get('/', function () {return view('layouts.main');});

route::get('/', [HomeController::class, 'index'])->name('homepage');
route::get('contact', [HomeController::class, 'contact'])->name('contact');
route::get('detail', [HomeController::class, 'detail'])->name('detail');

route::get('admin/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard.index');