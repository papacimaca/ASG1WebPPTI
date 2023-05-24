<?php

use App\Http\Controllers\AppController; 
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
Route::get('/', [AppController::class, 'index']);

Route::get('/detail/{book}', [AppController::class, 'detail']);

Route::get('/category/{category}', [AppController::class, 'category']);

Route::get('/publisher', [AppController::class, 'publisher']);

Route::get('/publisher/{id}', [AppController::class, 'publisherID']);

Route::get('/contact', [AppController::class, 'contactni']);
