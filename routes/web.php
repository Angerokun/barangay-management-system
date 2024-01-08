<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/residents', [App\Http\Controllers\ResidentProfileController::class, 'index'])->name('residents.index');
Route::get('/residents/list', [App\Http\Controllers\ResidentProfileController::class, 'residentDatatables'])->name('residents.list');
Route::get('/residents/create', [App\Http\Controllers\ResidentProfileController::class, 'create'])->name('residents.create');
Route::get('/residents/{id}', [App\Http\Controllers\ResidentProfileController::class, 'show'])->name('residents.show');
Route::get('/forms/create', [App\Http\Controllers\FormController::class, 'create'])->name('forms.create');
