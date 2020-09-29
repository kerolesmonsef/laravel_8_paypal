<?php

use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paymentController;
use Illuminate\Support\Facades\Route;
use Srmklive\PayPal\Services\PayPal;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dev/index', [DevelopersController::class, 'index'])->name('dev.index');

Route::get('paypal', [paymentController::class, "payment"]);
Route::get('paypal/success', [paymentController::class, "success"])->name('paypal.success');
Route::get('paypal/fail', [paymentController::class, "fail"])->name('paypal.fail');
