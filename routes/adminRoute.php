<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'verified', 'isAdmin'])->group(function(){
    Route::prefix('admin', function(){
        Route::get('home', [AdminController::class, 'home'])->name('admin.home');
    });
});
