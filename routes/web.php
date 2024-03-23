<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\RealtorController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\SellerOftheMonth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FullCalenderController;
use Illuminate\Support\Facades\Route;

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


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});



Route::group(['prefix' => 'back','middleware' => 'isauthorize:0'], function() {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('listings', ListingController::class);
    Route::resource('realtors', RealtorController::class);
    Route::resource('users', UserController::class);
    Route::resource('som', SellerOftheMonth::class);
    Route::resource('inquiries', InquiryController::class);

    Route::controller(FullCalenderController::class)->group(function(){
        Route::get('fullcalender', 'index');
        Route::post('fullcalenderAjax', 'ajax');
    });

});




