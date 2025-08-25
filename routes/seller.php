<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerMainController;
use App\Http\Controllers\Seller\StoreController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified', 'rolemanager:vendor'])->group(function () {
    //Grupo por controller
    Route::prefix('vendor')->name('vendor.')->group(function(){
        Route::controller(SellerMainController::class)->group(function(){
            Route::get('dashboard','index')->name('dashboard');
        });

        Route::controller(StoreController::class)->group(function(){
            Route::get('dashboard','index')->name('dashboard');
        });

        Route::controller(ProductController::class)->group(function(){
            Route::get('dashboard','index')->name('dashboard');
        });
    });
});
