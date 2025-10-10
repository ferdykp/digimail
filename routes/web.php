<?php

use App\Http\Controllers\ClientWedController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClientWedController::class, 'index'])->name('clientWed.index');
Route::resource('clientWed', ClientWedController::class);

Route::get('/invite/{slug}', [InvitationController::class, 'show'])->name('invite.show');
Route::post('/invite/store', [InvitationController::class, 'store'])->name('invite.store');

Route::get('/send-link/{invitation}', [InvitationController::class, 'sendLink'])->name('invite.sendLink');
