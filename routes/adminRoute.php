<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function(){
    Route::get('home', [AdminController::class, 'home'])->name('admin.home');
});