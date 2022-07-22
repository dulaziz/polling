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

Route::get('/',[pollingController::class,'index']);

Route::get('/admin',[adminController::class,'index']);
Route::get('/addPolling',[pollingController::class,'create']);


Route::post('/addUnit',[pollingController::class,'create_unit']);
Route::post('/addItems',[pollingController::class,'create_items']);

Route::get('/pollingUnit', function () {
    return view('pollingUnit', [
        "title" => "Polling Unit"
    ]);
});

Route::get('/editPolling/{id}',[pollingController::class,'edit']);
Route::post('/editPolling/{id}',[pollingController::class,'update']);

Route::get('/result/{vote_unit}',[pollingController::class,'result']);

Route::get('/pollingUnitBar', function () {
    return view('pollingUnitBar', [
        "title" => "Polling Unit Bar"
    ]);
});

Route::get('/pollingUnitBar/{id}',[pollingController::class,'show_bar']);
Route::get('/pollingUnit/{id}',[pollingController::class,'show_unit']);
Route::get('/getPollingUnit',[pollingController::class,'get_polling_json']);
Route::get('/viewPollUnit/{id}',[pollingController::class,'show_unit']);

Route::get('/adminLogin', function () {
    return view('adminLogin', [
        "title" => "Login"
    ]);
});

Route::get('/upload', function () {
    return view('upload', [
        "title" => "Upload"
    ]);
});

Route::get('/pollSurvey/{id}',[pollingController::class,'polling_survey']);
Route::post('/pollSurvey',[pollingController::class,'set_polling_survey']);



