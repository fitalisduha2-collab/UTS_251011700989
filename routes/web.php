
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnackController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/snacks', [SnackController::class, 'index'])
    ->name('snacks.index');

Route::get('/snacks/{id}', [SnackController::class, 'show'])
    ->name('snacks.show');
