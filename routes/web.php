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


// Route::view('/clientWed/dashboard', 'clientWed.dashboard')->name('clientWed.dashboard');
Route::get('/clientWed/dashboard', [ClientWedController::class, 'dashboard'])
    ->name('clientWed.dashboard')
    ->middleware('auth');


// Route::get('/clientWed', [ClientWedController::class, 'index'])->name('clientWed.index');
// MULTI STEP FORM
Route::get('/wedding/create/step1', [ClientWedController::class, 'createStep1'])->name('clientWed.create.step1');
Route::post('/wedding/create/step1', [ClientWedController::class, 'postStep1']);

Route::get('/wedding/create/step2', [ClientWedController::class, 'createStep2'])->name('clientWed.create.step2');
Route::post('/wedding/create/step2', [ClientWedController::class, 'postStep2']);

Route::get('/wedding/create/step3', [ClientWedController::class, 'createStep3'])->name('clientWed.create.step3');
Route::post('/wedding/create/step3', [ClientWedController::class, 'postStep3']);

Route::view('/clientWed/preview', 'clientWed.preview')->name('preview.wedding');
Route::resource('clientWed', ClientWedController::class);

// Route::get('/guest', function () {
//     return view('guest.index'); // resources/views/guest/index.blade.php
// })->name('guest.index');

Route::get('/invite/{slug}', [InvitationController::class, 'index'])->name('guest.index');
Route::post('/invite/store', [InvitationController::class, 'store'])->name('guest.store');

Route::get('/send-link/{invitation}', [InvitationController::class, 'sendLink'])->name('invite.sendLink');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
