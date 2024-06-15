<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index'])->middleware(['verify.shopify'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['verify.shopify'])->name('home');