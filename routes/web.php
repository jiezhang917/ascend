<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/store/{name}', [StoreController::class, 'index']);

Route::post('/checkout', [PaymentController::class, 'checkout']);

// Developer login page
Route::get('/developer', function () {
    return Inertia::render('Developer', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'user' => null
    ]);
});

// Logged in page
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
