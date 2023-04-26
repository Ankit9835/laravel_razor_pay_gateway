<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController as Razor;

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
});

Route::get('razorpay-payment', [Razor::class, 'index']);
Route::post('razorpay-payment', [Razor::class, 'store'])->name('razorpay.payment.store');
