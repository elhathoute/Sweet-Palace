<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('myLayouts/acceuil');
});
Route::get('/rooms', function () {
    return view('myLayouts/roomPage');
});
Route::get('/dashboard', function () {
    return view('myLayouts/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/myLayouts/roomTypeImages', ImageController::class);
Route::resource('/myLayouts/roomType',RoomTypeController::class);
Route::resource('/myLayouts/rooms',RoomController::class);
Route::resource('/myLayouts/admins', AdminController::class);
