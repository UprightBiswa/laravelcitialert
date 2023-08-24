<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\FeaturesController;

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

// Define the name group and apply it to the routes
Route::name('CitiAlert.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/article', [ArticleController::class, 'index'])->name('article');
    Route::get('/terms', [TermsController::class, 'index'])->name('terms');
    Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
});
