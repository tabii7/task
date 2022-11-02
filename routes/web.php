<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MeetingController;

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

Route::get('/', function () {
    return view('welcome');
});
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::post('attendees', [MeetingController::class, 'store'])->name('attendees'); 
Route::get('/viewmeetings', [MeetingController::class, 'show'])->name('viewmeetings');
Route::put('/edit/{id}', [MeetingController::class, 'edit'])->name('edit');
Route::DELETE('/delete/{id}', [MeetingController::class, 'destroy'])->name('delete');