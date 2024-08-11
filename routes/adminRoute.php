<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PartyListController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VotersInAdminController;

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function(){
    //Dashboard
    Route::get('dashboard/home', [AdminController::class, 'home'])->name('dashboard.home');

    //organization
    Route::get('organization/home', [OrganizationController::class, 'home'])->name('organization.home');

    //Partylist
    Route::get('party/home', [PartyListController::class, 'home'])->name('party.home');
    Route::post('party/add', [PartyListController::class, 'add'])->name('party.add');

    //College
    Route::get('college/home', [CollegeController::class, 'home'])->name('college.home');

    //position
    Route::get('position/home', [PositionController::class, 'home'])->name('position.home');

    //Candidate
    Route::get('candidate/home', [CandidateController::class, 'home'])->name('candidate.home');

    //Voter
    Route::get('voter/home', [VotersInAdminController::class, 'home'])->name('admin.voter.home');
});