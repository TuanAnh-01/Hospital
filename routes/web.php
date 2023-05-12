<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

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
    return view('welcome');
});

// Route::get('/doctor', function () {
//     return view('doctor');
// });

Route::resource('/Doctor', DoctorController::class);

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');

Route::get('/doctor_details', function () {
    return view('doctor_details');
});