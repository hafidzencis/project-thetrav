<?php

use App\Models\TravelPackage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/detail',[DetailController::class,'index'])->name('index');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');

Route::get('/checkout/success',[CheckoutController::class,'success'])->name('success-checkout');

Route::prefix('admin')
    // ->namespace('Admin')
    ->group(function (){
        Route::get('/',[DashboardController::class,'index'])
            ->name('dashboard');

        Route::resource('travel-package', TravelPackageController::class);

        Route::resource('gallery',GalleryController::class);
    });

Route::get('/login', [AuthenticatedSessionController::class, 'index'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login-account');


Route::get('/register', [RegisteredUserController::class, 'index'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->name('register-account');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');