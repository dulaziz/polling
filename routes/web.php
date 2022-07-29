<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\pollingController;
use App\Http\Livewire\AddItems;
use App\Http\Livewire\AddProfileItems;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Web

    // Polling Uni Page
    Route::get('/pollingUnit/{id}',[pollingController::class,'show_unit']);
    // View Unit Bar
    Route::get('/pollingUnitBar/{id}',[pollingController::class,'show_bar']);


// Guest User

Route::middleware('guest:web')->group(function(){
    // Home Page
    Route::get('/',[pollingController::class,'index']);
    // Login Page
    Route::get('auth/google',[GoogleController::class,'redirectToGoogle'])->name('google.login');
    Route::get('auth/google/callback',[GoogleController::class,'handleGoogleCallback'])->name('google.callback');
    // Polling Uni Page
    Route::get('/pollingUnit/{id}',[pollingController::class,'show_unit']);
    // View Unit Bar
    Route::get('/pollingUnitBar/{id}',[pollingController::class,'show_bar']);
});


// Route User

    // Middleware Auth User
    Route::middleware(['auth:web',])->group(function(){
        // Home Page
        Route::get('/home',[pollingController::class,'index'])->name('home');
        // PollSurvey Page
        Route::post('/pollSurvey',[pollingController::class,'set_polling_survey']);
        // Polling Uni Page
        // Route::get('/pollingUnit/{id}',[pollingController::class,'show_unit']);
         // View Unit Bar
        // Route::get('/pollingUnitBar/{id}',[pollingController::class,'show_bar']);
        // Action Logout
        Route::get('/auth/google/logout',[GoogleController::class,'logout'])->name('logout');
    });


// Route Admin

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        // Admin Login Page
        Route::get('/login', function () {return view('adminLogin', ["title" => "Login"]);})->name('login');
        Route::post('/check',[adminController::class,'check'])->name('check');
    });
    // Middleware Auth Admin
    Route::middleware(['auth:admin','is_admin','PreventBackHistory'])->group(function(){

        // Admin Page
        Route::get('/',[adminController::class,'index'])->name('home');

        // Add Polling Page
        Route::get('/addPolling',[pollingController::class,'create']);

        // Add Unit Page
        Route::get('/addPollItems', function () {return view('addPollItems', ["title" => "Add Poll Items"]);});
        Route::post('/addUnit',[pollingController::class,'create_unit']);

        // View Unit Bar
        Route::get('/pollingUnitBar/{id}',[pollingController::class,'show_bar']);

        // Add Item Page
        Route::get('/addItems/{id}',AddItems::class);

        // Edit Polling Page
        Route::get('/editPolling/{id}',[pollingController::class,'edit']);
        Route::post('/editPolling/{id}',[pollingController::class,'update']);

        // Result Polling Page
        Route::get('/result/{vote_unit}',[pollingController::class,'result']);

        // More Profile Page
        Route::get('/moreProfile/{id}',AddProfileItems::class);

        // Logout Page
        Route::get('/logout',[adminController::class,'logout'])->name('logout');
    });

});





// Route::post('/addItems',[pollingController::class,'create_items']);
// Route::get('/addItems/{id}',[pollingController::class,'edit_items']);
// Route::post('/addItems',[StoreItems::class,'storeItems']);

// Route::get('/pollingUnit', function () {
//     return view('pollingUnit', [
//         "title" => "Polling Unit"
//     ]);
// });



Route::get('/pollingUnitBar', function () {
    return view('pollingUnitBar', [
        "title" => "Polling Unit Bar"
    ]);
});



// Route::get('/getPollingUnit',[pollingController::class,'get_polling_json']);
Route::get('/viewPollUnit/{id}',[pollingController::class,'show_unit']);



Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});



// Route::get('/moreProfile', function () {
//     return view('moreProfile', [
//         "title" => "Add More Profile"
//     ]);
// });








// root Testing
// Route::get('/pollSurvey', function () {
//     return view('pollSurvey', [
//         "title" => "Poll Survey"
//     ]);
// });



Route::get('/pollSurvey/{id}',[pollingController::class,'polling_survey']);


Route::get('/formPollTes', function () {
    return view('formPollTes', [
        "title" => "Form Poll Tes"
    ]);
});
// root Testing



