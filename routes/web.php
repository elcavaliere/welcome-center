<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Trainees\Create;
use App\Http\Livewire\Trainees\Index;
use App\Http\Livewire\Trainees\Profile;
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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {

    Route::get('login', Login::class)
        ->name('login');
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');
//    Route::get('register', Register::class)
//        ->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('verified')->group(function () {


    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('/profile/{profile}', Profile::class)->name('users.profile');

    Route::get('password/reset', Email::class)
        ->name('password.request');

    Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');
});

Route::prefix('admin')->middleware(['auth','auth.admin'])->group(function (){

    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/trainees', Index::class)->name('trainees.index');
    Route::get('/trainees/create', Create::class)->name('trainees.create');

});
