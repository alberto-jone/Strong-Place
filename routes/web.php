<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:customer'])->name('dashboard');

// Grupos de rotas admin
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    //Grupo por controller
    Route::controller(AdminMainController::class)->prefix('admin')->name('admin.')->group(function(){
        Route::get('dashboard','index')->name('dashboard');
    });

});
// Route::middleware(['auth', 'verified', 'rolemanager:admin'])->prefix('admin')->name('admin.')->group(function () {

//     Route::get('dashboard', [App\Http\Controllers\Admin\AdminMainController::class,'index'])->name('dashboard');

// });


Route::get('/vendor/dashboard', function () {
    return view('vendor');
})->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
