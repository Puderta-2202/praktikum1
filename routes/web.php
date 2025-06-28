<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
// Route::get('/', function () {
//     return 'Selamat datang di aplikasi Laravel!';
// });

// Route::get('/halo/{nama}/{npm}', function ($nama, $npm) {
//     return 'Halo, ' . $nama . ' ' . $npm . ' !';
// });
Route::get('/', [GreetingsController::class, 'welcome']);

// Menghubungkan rute /halo/{name}/{npm} ke metode greet() di GreetingsController [cite: 150]
Route::get('/halo/{name}/{npm}', [GreetingsController::class, 'greet']);
