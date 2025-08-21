<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDiscountController;
use App\Http\Controllers\Admin\SubCategoryController;

// Grupos de rotas admin
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    //Grupo por controller
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::controller(AdminMainController::class)->group(function(){
            Route::get('dashboard','index')->name('dashboard');
            Route::get('/settings','setting')->name('settings');
            Route::get('/manage/users','manage_user')->name('manage.user');
            Route::get('/manage/stores','manage_stores')->name('manage.store');
            // Route::get('/manage/seller','manage_seller')->name('manage.seller');
            Route::get('/cart/history','cart_history')->name('cart.history');
            Route::get('/order/history','order_history')->name('order.history');
        });

        Route::controller(CategoryController::class)->group(function(){
            Route::get('/category/create','index')->name('category.create');
            Route::get('/category/manage','manage')->name('category.manage');
        });

        Route::controller(SubCategoryController::class)->group(function(){
            Route::get('/subcategory/create','index')->name('subcategory.create');
            Route::get('/subcategory/manage','manage')->name('subcategory.manage');
        });

        Route::controller(ProductController::class)->group(function(){
            Route::get('/product/manage','index')->name('product.manage');
            Route::get('/product/review/manage','review_manage')->name('product.review.manage');
        });

        Route::controller(ProductAttributeController::class)->group(function(){
            Route::get('/productattribute/create','index')->name('productattribute.create');
            Route::get('/productattribute/manage','manage')->name('productattribute.manage');
        });

        Route::controller(ProductDiscountController::class)->group(function(){
            Route::get('/discount/create','index')->name('discount.create');
            Route::get('/discount/manage','manage')->name('discount.manage');
        });

    });
});
