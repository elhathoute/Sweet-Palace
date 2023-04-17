<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffDepartement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;

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
Route::get('/about', function () {
    return view('myLayouts/aboutPage');
});
Route::get('/contact', function () {
    return view('myLayouts/contactPage');
});
Route::get('/dashboard', function () {
    return view('myLayouts/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/myLayouts/booking', BookingController::class);
Route::resource('/myLayouts/staff', StaffController::class);
Route::resource('/myLayouts/departements', StaffDepartement::class);
Route::resource('/myLayouts/roomType',RoomTypeController::class);
Route::resource('/myLayouts/rooms',RoomController::class);
Route::resource('/myLayouts/admins', AdminController::class);

//delete images
Route::get('myLayouts/room_type_images/delete/{id}',[RoomTypeController::class, 'destroy_image']);
