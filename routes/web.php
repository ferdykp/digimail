<?php

use App\Http\Controllers\ClientWedController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('welcome');
// });

// route::view('/', '/home/index');
Route::view('/', 'index')->name('landing');


Route::get('/clientWed', [ClientWedController::class, 'index'])->name('clientWed.index');
Route::resource('clientWed', ClientWedController::class);

Route::get('/invite/{slug}', [InvitationController::class, 'show'])->name('invite.show');
Route::post('/invite/store', [InvitationController::class, 'store'])->name('invite.store');

Route::get('/send-link/{invitation}', [InvitationController::class, 'sendLink'])->name('invite.sendLink');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
