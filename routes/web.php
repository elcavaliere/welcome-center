<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Home;
use App\Http\Livewire\Profiles\Update;
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

Route::get('/', function () {
    return redirect('login');
})->name('welcome');

Route::middleware('guest')->group(function () {

    Route::get('login', Login::class)
        ->name('login');
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('verified')->group(function () {

    Route::get('/home', Home::class)->name('home');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('/profile/{profile}', Profile::class)->name('users.profile');
    Route::get('/profile/{profile}/update', Update::class)->name('users.update-profile');

    Route::get('password/reset', Email::class)
        ->name('password.request');

    Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');

    Route::get('/sponsors', \App\Http\Livewire\Sponsors\Index::class)->name('sponsors.index');
    Route::get('/sponsors/create', \App\Http\Livewire\Sponsors\Create::class)->name('sponsors.create');
    Route::get('/sponsors/{sponsor}/edit', \App\Http\Livewire\Sponsors\Update::class)->name('sponsors.edit');
    Route::get('/sponsors/{sponsor}', \App\Http\Livewire\Sponsors\Show::class)->name('sponsors.show');

    Route::get('/trainings', \App\Http\Livewire\Trainings\Index::class)->name('trainings.index');
    Route::get('/trainings/create', \App\Http\Livewire\Trainings\Create::class)->name('trainings.create');
    Route::get('/trainings/{training}/edit', \App\Http\Livewire\Trainings\Update::class)->name('trainings.edit');
    Route::get('/trainings/{training}', \App\Http\Livewire\Trainings\Show::class)->name('trainings.show');
    Route::get('/trainings/assign-trainees', \App\Http\Livewire\Trainings\AssignTrainees::class)->name('trainings.assign-trainees');

    Route::get('/companies', \App\Http\Livewire\Companies\Index::class)->name('companies.index');
    Route::get('/companies/create', \App\Http\Livewire\Companies\Create::class)->name('companies.create');
    Route::get('/companies/{fundHelp}/edit', \App\Http\Livewire\Companies\Update::class)->name('companies.edit');
    Route::get('/companies/{company}', \App\Http\Livewire\Companies\Show::class)->name('companies.show');

    Route::get('/fundsHelp', \App\Http\Livewire\FundsHelp\Index::class)->name('fundsHelp.index');
    Route::get('/fundsHelp/create', \App\Http\Livewire\FundsHelp\Create::class)->name('fundsHelp.create');
    Route::get('/fundsHelp/{fundHelp}/edit', \App\Http\Livewire\FundsHelp\Update::class)->name('fundsHelp.edit');
    Route::get('/fundsHelp/grant', \App\Http\Livewire\FundsHelp\Grant::class)->name('fundsHelp.grant');
    Route::get('/fundsHelp/granted-list', \App\Http\Livewire\FundsHelp\GrantList::class)->name('fundsHelp.grant-list');

    Route::get('/fundings', \App\Http\Livewire\Fundings\Index::class)->name('fundings.index');
    Route::get('/fundings/create', \App\Http\Livewire\Fundings\Create::class)->name('fundings.create');
    Route::get('/fundings/{funding}/edit', \App\Http\Livewire\Fundings\Update::class)->name('fundings.edit');
});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/trainees', Index::class)->name('trainees.index');
    Route::get('/trainees/create', Create::class)->name('trainees.create');
});
