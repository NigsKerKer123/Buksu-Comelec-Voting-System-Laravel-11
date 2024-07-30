<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrganizationController;

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function(){
    //Dashboard
    Route::get('dashboard/home', [AdminController::class, 'home'])->name('dashboard.home');

    //organization
    Route::get('organization/home', [OrganizationController::class, 'home'])->name('organization.home');
});