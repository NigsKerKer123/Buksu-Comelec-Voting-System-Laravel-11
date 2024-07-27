<?php
use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'isVoter'])->group(function() {
    Route::prefix('voter')->group(function(){
        Route::get('home', [VoterController::class, 'home'])->name('voter.home');
    });
});
