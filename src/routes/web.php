<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/signup/{role}', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('logout', [SessionController::class, 'destroy'])->name('logout');

