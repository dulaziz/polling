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

Route::get('/viewPollUnit/{id}',[pollingController::class,'show']);

Route::get('/test', function () {
    return view('test');
});

