<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MlmController;
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

Route::get('/', [MlmController::class, 'index']);
Route::get('/create', [MlmController::class, 'create']);
Route::post('/store', [MlmController::class, 'store']);
Route::post('/show/{id}', [MlmController::class, 'show']);

