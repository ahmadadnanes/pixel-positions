<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
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

Route::get('/', [JobController::class , 'index'])->name('home');
Route::get('/search' , SearchController::class )->name('search');
Route::get('/tags/{tag:name}' , TagController::class )->name('tag');
Route::get('/jobs/create' , [JobController::class , 'create'] )->name('jobs.create')->middleware('auth');
Route::post('/jobs/create' , [JobController::class , 'store'] )->name('jobs.store')->middleware('auth');

Route::post('/jobs' , [JobController::class , 'store'] )->name('jobs.store')->middleware('auth');
Route::get('/jobs/{job}' , [JobController::class , 'show'] )->name('jobs.show')->middleware('auth');
Route::get('/jobs/{job}/edit' , [JobController::class , 'edit'] )->name('jobs.edit')->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class , 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class , 'store'])->name('register');
    Route::get('/login', [SessionController::class , 'create'])->name('login');
    Route::post('/login', [SessionController::class , 'store'])->name('login');
});

Route::delete('/logout' , [SessionController::class , 'destroy'])->name('logout')->middleware('auth');

