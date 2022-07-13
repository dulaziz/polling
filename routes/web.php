<?php

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

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Polling Unit"
    ]);
});

Route::get('/addPolling', function () {
    return view('addPolling', [
        "title" => "Add Polling Unit"
    ]);
});

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

Route::get('/result', function () {
    return view('result', [
        "title" => "Polling Result"
    ]);
});

Route::get('/pollingUnitBar', function () {
    return view('pollingUnitBar', [
        "title" => "Polling Unit Bar"
    ]);
});

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

Route::get('/image', function () {
    return view('image', [
        "title" => "Image"
    ]);
});


