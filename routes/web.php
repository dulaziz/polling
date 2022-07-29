<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\pollingController;
use App\Http\Controllers\ProductController;
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

Route::get('/admin', [adminController::class, 'index']);
Route::get('/addPolling', [pollingController::class, 'create']);


Route::post('/addUnit', [pollingController::class, 'create_unit']);
Route::post('/addItems', [pollingController::class, 'create_items']);

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

Route::get('/result/{vote_unit}', [pollingController::class, 'result']);

Route::get('/pollingUnitBar', function () {
    return view('pollingUnitBar', [
        "title" => "Polling Unit Bar"
    ]);
});
Route::get('/viewPollUnit/{id}', [pollingController::class, 'show']);

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

Route::get('/addMoreProfile', function () {
    return view('addMoreProfile', [
        "title" => "Add More Profile"
    ]);
});

Route::get('/editPolling', function () {
    return view('editPolling', [
        "title" => "Edit Polling Unit"
    ]);
});

Route::get('/editPollItems', function () {
    return view('editPollItems', [
        "title" => "Edit Polling Items"
    ]);
});

Route::get('/viewProfileItems', function () {
    return view('viewProfileItems', [
        "title" => "View Profile Items"
    ]);
});

Route::get('/products', function () {
    return view('products', [
        "title" => "Products"
    ]);
});
Route::post('/save',[ProductController::class,'save'])->name('save.product');
Route::get('/fetchProducts',[ProductController::class,'fetchProducts'])->name('fetch.products');
Route::get('/getProductDetails',[ProductController::class,'getProductDetails'])->name('get.product.details');
Route::post('/updateProduct',[ProductController::class,'updateProduct'])->name('update.product');
Route::post('/deleteProduct',[ProductController::class,'deleteProduct'])->name('delete.product');