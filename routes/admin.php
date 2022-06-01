<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware('auth:admin')->group(function(){
    Route::get('/', [PagesController::class, 'dashboard']);

    Route::prefix('faqs')->group(function(){
        Route::get('/', [FAQController::class, 'show']);
        Route::post('/create', [FAQController::class, 'create']);

        Route::prefix('/{id}')->group(function(){
            Route::get('/delete', [FAQController::class, 'delete']);
            Route::get('/status', [FAQController::class, 'status']);
            Route::get('/edit', [FAQController::class, 'edit']);
            Route::post('/update', [FAQController::class, 'update']);
        });
    });

    Route::prefix('gallery')->group(function(){
        Route::get('/', [GalleryController::class, 'index']);
        Route::post('/create', [GalleryController::class, 'create']);

        Route::prefix('/{id}')->group(function(){
            Route::get('/delete', [GalleryController::class, 'destroy']);
            Route::get('/status', [GalleryController::class, 'status']);
            Route::get('/edit', [GalleryController::class, 'edit']);
            Route::post('/update', [GalleryController::class, 'update']);
        });
    });
});
