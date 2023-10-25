<?php

use App\Http\Controllers\Web\NickController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [NickController::class, 'index'])->name('nick.index');
Route::get('/copy/{nick}', [NickController::class, 'copy'])->name('nick.copy');


