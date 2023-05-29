<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PersonController;
use App\Http\Controllers\dashboard\ProyectController;
use App\Http\Controllers\dashboard\TransactionController;
use Illuminate\Support\Facades\Auth;

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
 
Route::get('info6', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resetPassword', function () {
    return view('dashboard.user.login');
})->name('resetPassword');
Route::put('/users/{user}/set-new-password', [UserController::class, 'setNewPassword'])->name('user.setNewPassword');

Route::middleware(['admin'])->group(function () {
    Route::resource('proyect',ProyectController :: class);
    Route::get('/proyect/{proyect}/people', [ProyectController::class, 'showPeople'])->name('proyect.showPeople');
    Route::get('/proyect/{proyect}/transactions', [ProyectController::class, 'showTransactions'])->name('proyect.transactions');
    Route::get('/proyect/{proyect}/users', [ProyectController::class, 'showUsers'])->name('proyect.users');

    Route::resource('person',PersonController :: class);
    Route::get('/person/{person}/setDebt', [PersonController::class, 'setDebt'])->name('person.setDebt');
    Route::put('/person/{person}/storeDebt', [PersonController::class, 'storeDebt'])->name('person.storeDebt');

    Route::resource('user',UserController :: class);
    Route::get('/users/{user}/temp-password', [UserController::class, 'setTempPassword'])->name('user.setTempPassword');

    Route::resource('transaction',TransactionController :: class);
});
