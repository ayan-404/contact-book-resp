<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;

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

Route::get('/app', [AppController::class, 'index']);
Route::get('/app/contacts', [ContactController::class, 'index'])->name('/app/contacts');
Route::get('/app/contacts/create', [ContactController::class, 'create'])->name('create');

Route::resource('/app/contacts', ContactController::class);
