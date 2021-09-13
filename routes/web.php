<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\PresenceController;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('exam', ExamController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('presence', PresenceController::class);
Route::resource('assignment', AssignmentController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
