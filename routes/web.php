<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RgmController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CrewController;


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

Route::get('/', [SiteController::class, 'home']);
Route::get('/rgms', [RgmController::class, 'index'])->name('rgms');
Route::get('/rgms/create', [RgmController::class,'create']);
Route::post('/rgms/create',[RgmController::class,'store']);
Route::get('/rgms/{rgm}', [RgmController::class, 'edit']);
Route::post('/rgms/{rgm}', [RgmController::class, 'update']);


Route::get('/managers', [ManagerController::class, 'index'])->name('managers');
Route::get('/managers/create', [ManagerController::class, 'create']);
Route::post('/managers/create', [ManagerController::class, 'store']);
Route::get('/managers/{manager}', [ManagerController::class, 'edit']);
Route::post('/managers/{manager}', [ManagerController::class, 'update']);
Route::delete('/managers/delete/{manager}', [ManagerController::class, 'delete']);

Route::get('/crews', [CrewController::class, 'index'])->name('crews');
Route::get('/crews/create', [CrewController::class, 'create']);
Route::post('/crews/create', [CrewController::class, 'store']);
Route::get('/crews/{crew}', [CrewController::class, 'edit']);
Route::post('/crews/{crew}', [CrewController::class, 'update']);
Route::delete('/crews/delete/{crew}', [CrewController::class, 'delete']);
