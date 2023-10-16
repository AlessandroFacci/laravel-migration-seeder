<?php

use App\Http\Controllers\PageController;

use App\Http\Controllers\TrainController;
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

//* Rotte Statiche
Route::get('/', [PageController::class, 'index'])->name('home');

//* Rotte risorsa train
Route::get('/train', [TrainController::class, 'index'])->name('train.index');