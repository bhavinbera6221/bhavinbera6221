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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/testroute', 'mypage');
Route::get('/allproducts',[App\Http\Controllers\ProductController::class, 'index']);
Route::view('/admin', 'admindashboard');
Route::get('/addnewproduct',[App\Http\Controllers\ProductController::class, 'create']);
Route::post('/storeproduct',[App\Http\Controllers\ProductController::class, 'store']);
Route::get('/deleteprod/{prodid?}',[App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/editprod/{prodid?}',[App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/saveeditedproduct/{prodid?}',[App\Http\Controllers\ProductController::class, 'update']);
Route::view('/sendmailview', 'sendmailview');
Route::view('/macros', 'macros');
Route::post('/sendmailtest',[App\Http\Controllers\HomeController::class, 'sendmail']);
// Route::get('/viewproduct/{prodid?}',[App\Http\Controllers\ProductController::class, 'view']);
Route::get('/generatepdf/{prodid?}', [App\Http\Controllers\ProductController::class, 'generatePDF']);
Route::get('/datacalling', [App\Http\Controllers\ProductController::class, 'datacalling'])->name('users.index');