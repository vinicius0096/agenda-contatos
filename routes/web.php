<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->middleware('auth')->name('schedule.create');

Route::post('/store', [App\Http\Controllers\ScheduleController::class, 'store'])->middleware('auth')->name('schedule.store');

Route::get('/show', [App\Http\Controllers\ScheduleController::class, 'show'])->middleware('auth')->name('schedules.show');

Route::get('/records', [App\Http\Controllers\RecordController::class, 'create'])->middleware('auth')->name('records.create');

Route::get('/records/show', [App\Http\Controllers\RecordController::class, 'show'])->middleware('auth')->name('records.show');

Route::post('/records/store', [App\Http\Controllers\RecordController::class, 'store'])->middleware('auth')->name('records.store');

Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
}) ;