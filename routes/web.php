<?php
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\NewController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\BookingDetailsController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\GuestController;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\backend\RoomtypeController;
use App\Http\Controllers\backend\HotelController;
use App\Http\Controllers\backend\AdminController;
use App\Models\Booking;
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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/home-page',[HomeController::class,'page'])->name('home.page');
Route::get('/room-page',[HomeController::class,'room'])->name('room.page');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/pages',[PageController::class,'pages'])->name('page');
Route::get('/room-details',[PageController::class,'details'])->name('room.details');
Route::get('/blos-details',[BlogController::class,'blog'])->name('blog');
Route::get('/news',[NewController::class,'news'])->name('news');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');


Route::post('Front_reg_submit',[HomeController::class,'Regsubmit'])->name('reg.submit');

Route::post('/Front_login',[HomeController::class,'Front_login'])->name('Front_login');
Route::get('/Front_logout',[HomeController::class,'Front_logout'])->name('Front_logout');



Route::get('/reg-form', [AuthController::class, 'regForm'])->name('regForm');
Route::post('/reg-form-submit', [AuthController::class, 'regFormSubmit'])->name('regFormSubmit');

Route::get('/login-form', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login-form-submit', [AuthController::class, 'loginFormSubmit'])->name('loginFormSubmit');

Route::group(["middleware" => "auth","CheckAdmin"], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


     Route::get('/NiceAdmin', [AdminController::class, 'dashboard']);
     Route::get('/NiceAdmin', [AdminController::class, 'master']);
    Route::get('/NiceAdmin', [AdminController::class, 'newPage'])->name('Nice.Admin');


    Route::get('/hotel-setup', [HotelController::class, 'setup'])->name('hotel.setup');
    Route::get('/hotel-create-form', [HotelController::class, 'create'])->name('hotel.create.form');
    Route::Post('/hotel-submit-form', [HotelController::class, 'submit'])->name('hotel.submit.form');
    Route::get('/delete-hotel/{id}', [HotelController::class, 'delete'])->name('delete.hotel');
    Route::get('/edit-hotel/{id}', [HotelController::class, 'edit'])->name('edit.hotel');
    Route::put('/update-hotel-form/{id}', [HotelController::class, 'update'])->name('update.hotel.form');

    Route::get('/room-type', [RoomTypeController::class, 'type'])->name('room.type');
    Route::get('/roomtypeform', [RoomTypeController::class, 'create'])->name('roomtypeform');
    Route::post('/roomtype-submit-form', [RoomTypeController::class, 'submit'])->name('roomtype.submit.form');
    Route::get('/delete/{id}', [RoomTypeController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [RoomTypeController::class, 'edit'])->name('edit');
    Route::get('/edit/{id}', [RoomTypeController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RoomTypeController::class, 'update'])->name('update');

    Route::get('/room-list', [RoomController::class, 'list'])->name('room.list');
    Route::get('/room-create-form', [RoomController::class, 'create'])->name('room.create.form');
    Route::post('/room-submit', [RoomController::class, 'submit'])->name('room.submit');
    Route::get('/delete-room/{id}', [RoomController::class, 'delete'])->name('delete.room');
    Route::get('/edit-room/{id}', [RoomController::class, 'edit'])->name('edit.room');
    Route::put('/update-room-form/{id}', [RoomController::class, 'update'])->name('update.room.form');

    Route::get('/guest-list', [GuestController::class, 'list'])->name('guest.list');
    Route::get('/guest-create-form', [GuestController::class, 'create'])->name('guest.create.form');
    Route::Post('/guest-submit-form', [GuestController::class, 'submit'])->name('guest.submit.form');
    Route::get('/delete-guest/{id}', [GuestController::class, 'delete'])->name('delete.guest');
    Route::get('/edit-guest/{id}', [GuestController::class, 'edit'])->name('edit.guest');
    Route::put('/update-guest-form/{id}', [GuestController::class, 'update'])->name('update.guest.form');

    Route::get('/booking',[BookingController::class,'list'])->name('booking');
    Route::get('/create-form',[BookingController::class,'create'])->name('create.form');

    Route::get('/booking-details', [BookingDetailsController::class, 'details'])->name('booking.details');
    Route::get('/booking-create', [BookingDetailsController::class, 'create'])->name('booking.create');


    Route::get('/payment-list', [PaymentController::class, 'list'])->name('payment.list');
    Route::get('/payment-create-form', [PaymentController::class, 'create'])->name('Payment.create.form');
    Route::Post('/payment-submit-form', [paymentController::class, 'submit'])->name('payment.submit.form');
    Route::get('/delete-payment/{id}', [PaymentController::class, 'delete'])->name('delete.payment');
    Route::get('/edit-payment/{id}', [PaymentController::class, 'edit'])->name('edit.payment');
    Route::put('/update-payment-form/{id}', [PaymentController::class, 'update'])->name('update.payment.form');

    Route::get('/package-list', [PackageController::class, 'list'])->name('package.list');
    Route::get('/package-create', [PackageController::class, 'create'])->name('create');
    Route::post('/package-submit-form', [PackageController::class, 'submit'])->name('submit.form');
    Route::get('/package-delete/{id}', [PackageController::class, 'delete'])->name('package.delate');
    Route::get('/edit-package/{id}', [PackageController::class, 'edit'])->name('edit.package');

});
