<?php

use App\Http\Controllers\Backend\AngkatanController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\Booking_cutController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\LayananController;
use App\Http\Controllers\Backend\PenggunaController;
use App\Http\Controllers\Backend\StylistController;
use App\Http\Controllers\Backend\TreatmentController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Routing\Route as RoutingRoute;
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


Route::get('/', [FrontendController::class,'index']);
Route::get('/dashboard', [BackendController::class,'index']);

//Frontend
Route::get('/academy', function (){
    return view('frontend.academy');
});

Route::get('/coba', function (){
    return view('frontend.academy_Coba');
});

Route::get('/pilih_layanan', function (){
    return view('frontend.pilih_layanan');
});
Route::get('/pilih_stylist', function (){
    return view('frontend.pilih_stylist');
});
Route::get('/pilih_treatment', function (){
    return view('frontend.pilih_treatment');
});
Route::get('/booking_haircut', function (){
    return view('frontend.form_booking_haircut');
});

// login
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login-proses', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);

//Registrasi
Route::get('/register', [AuthController::class,'register']);
Route::post('/register-proses', [AuthController::class,'register_proses']);


//pengguna
Route::resource('/pengguna', PenggunaController::class)->middleware('auth');


//layanan
Route::resource('/layanan', LayananController::class)->middleware('auth');


//Stylist
Route::resource('/stylist', StylistController::class)->middleware('auth');


//Treatment
Route::resource('/treatment', TreatmentController::class)->middleware('auth');


//Course
Route::resource('/course', CourseController::class)->middleware('auth');

//Angkatan
Route::resource('/angkatan', AngkatanController::class)->middleware('auth');

//Booking Hair Cut
Route::resource('/bookingcut', Booking_cutController::class)->middleware('auth');