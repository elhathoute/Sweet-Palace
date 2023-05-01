<?php
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComplementController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffDepartement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;

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

// Route::get('/', function () {
//     return view('myLayouts/acceuil');
// });
Route::get('/booking', function () {
    return view('myLayouts/booking');
})->name('booking');


// Route::get('/services', function () {
//     return view('myLayouts/servicePage');
// });
// Route::get('/gallery', function () {
//     return view('myLayouts/galleryPage');
// });
Route::get('/myLayouts/makeReservation/{room_id}',[PageController::class, 'reservation_display']);

Route::middleware(['auth', 'checkUserRole'])->group(function () {
    Route::get('/dashboard', function () {
        return view('myLayouts/dashboard');
    });
    Route::get('/myLayouts/statistics', [DashboardController::class, 'index']);
    Route::resource('/myLayouts/booking', BookingController::class);
    Route::resource('/myLayouts/staff', StaffController::class);
    Route::resource('/myLayouts/departements', StaffDepartement::class);
    Route::resource('/myLayouts/roomType',RoomTypeController::class);
    Route::resource('/myLayouts/rooms',RoomController::class);
    Route::resource('/myLayouts/admins', AdminController::class);
    Route::resource('/myLayouts/users', UserController::class);
    Route::resource('/myLayouts/services', ServiceController::class);
    Route::resource('/myLayouts/gallery', GalleryController::class);
    Route::resource('/myLayouts/amenities', AmenityController::class);
    Route::resource('/myLayouts/complements', ComplementController::class);
    Route::resource('/myLayouts/beds', BedController::class);

    //check availabality
    Route::get('myLayouts/booking/available-rooms/{checkin_date}',[BookingController::class, 'available_rooms']);

    //delete images
    Route::get('myLayouts/room_type_images/delete/{id}',[RoomTypeController::class, 'destroy_image']);

});


Route::get('/',[PageController::class, 'acceuil']);

Route::get('/about', [PageController::class, 'about_us']);
Route::get('/rooms',[PageController::class, 'diplayRooms']);
Route::get('/available_rooms',[PageController::class, 'checkAvailability']);
Route::get('/services',[PageController::class, 'services']);
Route::get('/gallery',[PageController::class, 'gallery']);
Route::get('/contact',[PageController::class, 'contact_us'])->name('contact');
Route::post('/save_contact_us',[PageController::class, 'save_contact_us']);


Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfilController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfilController::class,'update'])->name('profile.update');
    Route::get('/change-password', [ProfilController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [ProfilController::class, 'updatePassword'])->name('update-password');
    Route::match(['post', 'delete'],'/delete-account', [ProfilController::class, 'deleteAccount'])->name('user.delete');
    Route::get('myLayouts/reservation/{id}', [PageController::class, 'reservation']);
    Route::post('myLayouts/makeReservation/{room_id}', [PageController::class, 'make_reservation'])->name('bookings.make_reservation');
});
Route::get('myLayouts/bookingPage/{id}', [PageController::class, 'booking'])->name('bookingPage');

