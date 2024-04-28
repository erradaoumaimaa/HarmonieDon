<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MessageController;
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

/** Register */
Route::get('/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/signup/{role}', [RegisterController::class, 'store'])->name('register.store');
/** Login */
Route::get('login', [SessionController::class, 'index'])->name('login');
Route::post('login', [SessionController::class, 'store'])->name('login.store');
/** Logout */
Route::get('logout', [SessionController::class, 'destroy'])->name('logout');

/** Admin */
Route::middleware('can:admin')->group(function() {
    Route::get('admins', [AdminController::class, 'index'])->name('admins.index');


});
/** Donor */
Route::middleware('can:donor')->group(function() {
    Route::get('donors', [DonorController::class, 'index'])->name('donors.index');
    Route::get('donors/profile', [DonorController::class, 'profile'])->name('donors.profile');
    /** Create a donation  */
    Route::get('donors/create',[DonationController::class, 'create'])->name('donors.create');
    Route::post('donors/store',[DonationController::class, 'store'])->name('donors.store');
    /**Update */
    Route::get('/donors/donations/{id}/edit', [DonationController::class, 'edit'])->name('donors.edit');
    Route::put('/donors/donations/{id}/update', [DonationController::class, 'update'])->name('donors.update');
    /**Delete */
    Route::delete('/donors/donations/{id}/destroy', [DonationController::class, 'destroy'])->name('donors.destroy');

    Route::get('/donors/donations', [DonorController::class, 'donations'])->name('donors.donations');

});

/** association */
Route::middleware('can:association')->group(function() {
    Route::get('association', [AssociationController::class, 'index'])->name('association.index');


});
/** user */
Route::middleware('can:user')->group(function() {
    Route::get('users', [UserController::class, 'index'])->name('users.index');


});

Route::get('blog',function(){
    return view('blog.details');
});
Route::get('donation',function(){
    return view('donation.details');
});
/** chat */
Route::middleware('auth')->group(function() {
    Route::get('/chat/{id}', [MessageController::class, 'allMessages'])->name('messages.index');
});
