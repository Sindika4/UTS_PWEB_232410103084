<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

Route::get('/', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profile', [PageController::class, 'profile']);
Route::post('/login', function (Request $request) {
    session(['username' => $request->input('username')]);
    return redirect('/dashboard');
});
