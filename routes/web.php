<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/faq', [PageController::class, 'faqs']);
Route::get('/gallery', [PageController::class, 'gallery']);

Route::get('/team', [TeamController::class, 'list']);

Route::get('/events', [EventController::class, 'list']);
Route::get('/events/{slug}', [EventController::class, 'show']);

Route::get('/news', [PostController::class, 'list']);
Route::get('/news/{slug}', [PostController::class, 'show']);

Route::get('/membership-category', [TeamController::class, 'membershipCategory']);

Route::prefix('donate')->group(function(){
    Route::get('/', [DonationController::class, 'index']);
    Route::post('/pay', [DonationController::class, 'initiate']);
    Route::get('/complete', [DonationController::class, 'verify']);
    Route::get('/invoice', [DonationController::class, 'downloadInvoice']);
    Route::get('/show-invoice', function(){
        return view('components.invoice');
    });
});

