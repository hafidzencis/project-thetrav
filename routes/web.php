<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\Route;

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

