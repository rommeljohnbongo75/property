<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\SellerOftheMonth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\RealtorController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactNewController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Auth\LoginRegisterController;

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

// Route::get('/register', function () {
//     return view('welcome');
// })->name('register');

Route::get('/welcome', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/listings', [FrontEndController::class, 'listings'])->name('listings');
Route::get('/listings/{id}', [FrontEndController::class, 'listing'])->name('single.listing');
Route::get('/dashboard', [FrontEndController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/query', [searchController::class, 'search'])->name('search');
Route::get('/search', [searchController::class, 'result'])->name('result');
Route::post('/contact', [ContactController::class, 'store'])->name('send-message');
Route::get('/cla', [ContactController::class, 'cla'])->name('cla');
Route::get('/conatct-new', [ContactController::class, 'conatctNew'])->name('conatct.new');
Route::get('/rental', [ContactController::class, 'rental'])->name('rental');
Route::get('/rental-form', [ContactController::class, 'rentalform'])->name('rental-form');
Route::get('/photos-form', [ContactController::class, 'photosform'])->name('photos-form');

Route::get('/photos-form', [ContactController::class, 'photosform'])->name('photos-form');
Route::get('/listings-location', [ContactController::class, 'listingLocation'])->name('listings.location');


Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register/post', 'store')->name('register.post');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/admin/login', 'adminLogin')->name('admin.login');
    Route::post('/admin/login/post', 'adminLoginPost')->name('admin.login.post');
});
Route::controller(RentalController::class)->group(function () {
    Route::post('rental/store', 'store')->name('rental.store');
    Route::post('/location/store', 'locationStore')->name('location.store');
    Route::post('/upload', 'upload')->name('photos.upload');
    Route::post('message/store', 'messageStore')->name('message.store');
    Route::get('contact/edit','Edit')->name('contact.edit');  
    Route::put('contact/update','update')->name('contact.update'); 
    Route::get('rental/edit/{id}','editrentalform')->name('rental.edit');
    Route::put('rental/update/{id}','updaterentalform')->name('rental.update'); 
});
Route::controller(ContactNewController::class)->group(function () {
    Route::get('contact','index')->name('contact.index');  
    Route::post('store', 'contactStore')->name('store');
    Route::get('contact/delete/{id}', 'contactDelete')->name('contact.delete');

});
Route::controller(HomeController::class)->group(function () {
    Route::get('banner','index')->name('banner.index');  
    Route::get('banner/create','create')->name('banner.create');  
    Route::post('banner/store','store')->name('banner.store');  
    Route::get('banner/edit/{id}', 'edit')->name('banner.edit');
    Route::put('banner/update/{id}', 'update')->name('banner.update');
    Route::post('banner/chengestatus','changestatus')->name('banner.chnageStatus');
    Route::get('banner/delete/{id}', 'destroy')->name('banner.delete');





});

Route::group(['prefix' => 'back', 'middleware' => 'isauthorize:0'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('listings', ListingController::class);
    Route::resource('realtors', RealtorController::class);
    Route::resource('users', UserController::class);
    Route::resource('som', SellerOftheMonth::class);
    Route::resource('inquiries', InquiryController::class);

    Route::controller(FullCalenderController::class)->group(function () {
        Route::get('fullcalender', 'index');
        Route::post('fullcalenderAjax', 'ajax');
    });
});
