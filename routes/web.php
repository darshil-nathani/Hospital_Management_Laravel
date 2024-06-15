<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Middleware\validuser;

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

Route::get("/",function(){
    return view('user.welcome');
})->name('home');


Route::view('register','user.registeration')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','user.login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboardPage'])
            ->name('dashboard')
            ->middleware(validuser::class);

Route::get('logout',[UserController::class,'logout'])->name('logout');



Route::resource('patient',PatientController::class)
                ->middleware(validuser::class);

Route::resource('doctor',DoctorController::class)
                ->middleware(validuser::class);
