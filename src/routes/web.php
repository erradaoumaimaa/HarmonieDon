<?php
use lluminate\Auth\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');



/** Register */
Route::get('/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/signup/{role}', [RegisterController::class, 'store'])->name('register.store');
/** Login */
Route::middleware('guest')->group(function(){
    Route::get('login', [SessionController::class, 'index'])->name('login');
    Route::post('login', [SessionController::class, 'store'])->name('login.store');
  });


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
    Route::get('/donors/reservations', [DonorController::class, 'reservations'])->name('donors.reservations');
    Route::put('/reservations/{reservation}/approve', [ReservationController::class, 'approve'])->name('reservation.approve');
    Route::put('/reservations/{reservation}/reject', [ReservationController::class, 'reject'])->name('reservation.reject');

});

/** association */
Route::middleware('can:association')->group(function() {
    Route::get('association', [AssociationController::class, 'index'])->name('association.index');
    /** Create a blog  */
    Route::get('association/create',[BlogPostController::class, 'create'])->name('blogs.create');
    Route::post('association/store',[BlogPostController::class, 'store'])->name('blogs.store');


});
/** user */
Route::middleware('can:user')->group(function() {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::post('donation/{donation}/apply', [ReservationController::class, 'apply'])->name('donation.apply');

});

Route::post('/{user}/follow', [UserController::class, 'follow'])->name('user.follow')->middleware('auth');
Route::get('/notifications/count/{user}', [UserController::class, 'notifCount'])->name('user.notifications');

/** comment */
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');
Route::post('/{blog}/like', [BlogPostController::class, 'like'])->name('like.store')->middleware('auth');

Route::get('blog/{blog}', [BlogPostController::class, 'show'])->name('blog.show');

Route::get('/donation/{donation}', [DonationController::class, 'show'])->name('donation.show');
/** chat */
Route::middleware('auth')->group(function() {
    Route::get('/chat/{id}', [MessageController::class, 'allMessages'])->name('messages.index');
});


