<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PasswordController;
use App\Http\Controllers\dashboard\PersonaController;

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
 
Route::get('info6', function () {//Lo d comillas es el /cosa que se pone
    // ...
    //return 'Hola mundo';
    return view('welcome');
});

//Route::get('/post', [PostController::class, 'index']);//Este controlador se necesita crear porque de momento no existe
//es recomendable usar combres de rutas coherentes con el nombre dle controlador

    //Route::resource('post',PostController :: class);
    //Route::resource('category',CategoryController :: class);
    //Route::resource('user',UserController :: class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resetPassword', function () {
    return view('dashboard.user.login');
})->name('resetPassword');
Route::put('/users/{user}/set-new-password', [UserController::class, 'setNewPassword'])->name('user.setNewPassword');

Route::middleware(['admin'])->group(function () {
    Route::resource('post',PostController :: class);
    Route::resource('category',CategoryController :: class);
    Route::resource('persona',PersonaController :: class);
    Route::resource('user',UserController :: class);
    Route::get('/users/{user}/temp-password', [UserController::class, 'setTempPassword'])->name('user.setTempPassword');
});
