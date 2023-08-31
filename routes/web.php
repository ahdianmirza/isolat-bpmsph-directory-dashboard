<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RakController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectoryController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/directory', DirectoryController::class);
Route::get('/search', [DirectoryController::class, 'search']);
Route::get('/directory/create/create-rak', [RakController::class, 'create']);
Route::post('/directory/create/create-rak', [RakController::class, 'store']);