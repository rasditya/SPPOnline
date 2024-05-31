<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WalisiswaController;
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
})->name('home');

Route::get('/pendataan', function () {
    return view('pendataan');
})->name('pendataan');

Route::get('/hitung', [HitungController::class, 'hitung']);
Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //route walisiswa
    Route::get('/walisiswa', [WalisiswaController::class, 'index']);
    Route::get('/tambahwalisiswa', [WalisiswaController::class, 'tambahwalisiswa']);
    Route::post('/walisiswa', [WalisiswaController::class, 'walisiswa']);

    //show
    Route::get('/walisiswa/{walisiswa_id}', [WalisiswaController::class, 'show']);

    //update or edit
    Route::get('/walisiswa/{walisiswa_id}/edit', [WalisiswaController::class, 'edit']);
    Route::put('/walisiswa/{walisiswa_id}', [WalisiswaController::class, 'update']);

    //delete
    Route::delete('/walisiswa/{walisiswa_id}', [WalisiswaController::class, 'destroy']);
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

//register
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);