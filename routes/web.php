<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{PageController, NoteController};

Route::view('/', 'index');

Route::get('dashboard', [PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('notes', NoteController::class)
    ->middleware('auth:sanctum');
/*
Route::get('/', function () {
return Inertia::render('Welcome', [
'canLogin' => Route::has('login'),
'canRegister' => Route::has('register'),
'laravelVersion' => Application::VERSION,
'phpVersion' => PHP_VERSION,
]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return Inertia::render('Dashboard');
})->name('dashboard');
*/
