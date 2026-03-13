<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\GoogleController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


use App\Http\Controllers\GoogleController;

Route::get('/auth/google', [GoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);





Route::get('/treks/{slug}', function($slug){

    //convert slug to view name (everest-base-camp -> everest-base-camp)
    $viewPath = 'treks.details.' . $slug;

    //If view doesn't exist -> show 404
    if (!view()->exists($viewPath)) {
        abort(404, 'Trek not found');
    }

    return view($viewPath, [
        'slug' => $slug,
        'title' => str_replace('-', '', ucwords($slug))
    ]);
})->name('treks.details');