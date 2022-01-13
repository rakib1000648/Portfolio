<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioGeneralController;
use App\Http\Controllers\Profile\HeaderSectionController;
use App\Http\Controllers\Profile\AboutSectionController;
use App\Http\Controllers\Profile\SkillSectionController;
use App\Http\Controllers\Profile\InboxController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'show'])
->middleware(['auth']);
Route::put('/homesection', [HomeController::class, 'ManageSection']);

//===========Portfolio general view===========================

Route::get('/{userid}', [PortfolioGeneralController::class, 'show']);

//===========Header section===========================

Route::get('/home/header', [HeaderSectionController::class, 'index'])
->middleware(['auth']);

Route::put('/header-update', [HeaderSectionController::class, 'CreateAndUpdate'])
->middleware(['auth']);


//===========About section===========================

Route::get('/home/about', [AboutSectionController::class, 'index'])
->middleware(['auth']);

Route::put('/about-update', [AboutSectionController::class, 'CreateAndUpdate'])
->middleware(['auth']);

//===========Fact section===========================





//===========Skill section===========================

Route::get('/home/skills', [SkillSectionController::class, 'index'])
->middleware(['auth']);

// Route::put('/skill-intro-update', [SkillSectionController::class, 'CreateAndUpdateSkillIntro'])
// ->middleware(['auth']);

// Route::put('/skill-details', [SkillSectionController::class, 'CreateSkillDetails'])
// ->middleware(['auth']);

// Route::post('/skill-details-update', [SkillSectionController::class, 'UpdateSkillDetails'])
// ->middleware(['auth']);

//===================Inbox===========================

Route::get('/home/inbox', [InboxController::class, 'show'])
->middleware(['auth']);
