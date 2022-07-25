<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\pollingController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/admin',[adminController::class,'index']);
Route::get('/addPolling',[pollingController::class,'create']);


Route::post('/addUnit',[pollingController::class,'create_unit']);
Route::post('/addItems',[pollingController::class,'create_items']);

Route::get('/pollingUnit', function () {
    return view('pollingUnit', [
        "title" => "Polling Unit"
    ]);
});

Route::get('/editPolling', function () {
    return view('editPolling', [
        "title" => "Edit Polling Unit"
    ]);
});

Route::get('/result/{vote_unit}',[pollingController::class,'result']);

Route::get('/pollingUnitBar', function () {
    return view('pollingUnitBar', [
        "title" => "Polling Unit Bar"
    ]);
});
Route::get('/viewPollUnit/{id}',[pollingController::class,'show']);

Route::get('/adminLogin', function () {
    return view('adminLogin', [
        "title" => "Login"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/addPollItems', function () {
    return view('addPollItems', [
        "title" => "Add Poll Items"
    ]);
});

Route::get('/moreProfile', function () {
    return view('moreProfile', [
        "title" => "Add More Profile"
    ]);
});






// root Testing
Route::get('/pollSurvey', function () {
    return view('pollSurvey', [
        "title" => "Poll Survey"
    ]);
});
Route::get('/formPollTes', function () {
    return view('formPollTes', [
        "title" => "Form Poll Tes"
    ]);
});
// root Testing



