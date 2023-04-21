<?php
use App\Http\Controllers\ProfilController;
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
Route::get('/services', function () {
    return view('myLayouts/servicePage');
});
Route::get('/gallery', function () {
    return view('myLayouts/galleryPage');
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

Route::get('/acceuil', function(){
    return view('myLayouts/acceuil');
})->name('acceuil');
Route::resource('/myLayouts/booking', BookingController::class);
Route::resource('/myLayouts/staff', StaffController::class);
Route::resource('/myLayouts/departements', StaffDepartement::class);
Route::resource('/myLayouts/roomType',RoomTypeController::class);
Route::resource('/myLayouts/rooms',RoomController::class);
Route::resource('/myLayouts/admins', AdminController::class);

//check availabality
Route::get('myLayouts/booking/available-rooms/{checkin_date}',[BookingController::class, 'available_rooms']);

//delete images
Route::get('myLayouts/room_type_images/delete/{id}',[RoomTypeController::class, 'destroy_image']);

Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfilController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfilController::class,'update'])->name('profile.update');
    Route::get('/change-password', [ProfilController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [ProfilController::class, 'updatePassword'])->name('update-password');
});

