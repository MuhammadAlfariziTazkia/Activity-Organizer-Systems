<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ExamController;
use app\Http\Controllers\ScheduleController;
use app\Http\Controllers\AssignmentController;
use app\Http\Controllers\PresenceController;
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
    return view('welcome');
});

Route::resource('exam', ExamController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('presence', PresenceController::class);
Route::resource('assignment', AssignmentController::class);