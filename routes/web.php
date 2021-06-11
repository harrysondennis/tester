<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegController;

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

Route::get('/changes', function () {
    return view('users.changePassword');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Route::resource('users', App\Http\Controllers\UsersController::class);

Route::resource('roles', App\Http\Controllers\RolesController::class);

Route::resource('permissions', App\Http\Controllers\PermissionsController::class);

Route::resource('reg', App\Http\Controllers\RegController::class);

Route::resource('/userstatus', App\Http\Controllers\UserStatusController::class);

Route::post("/d",[App\Http\Controllers\RegController::class, 'district'])->name('district');

Route::post("/ward",[App\Http\Controllers\RegController::class, 'getw'])->name('ward');

Route::post("/cod",[App\Http\Controllers\RegController::class,'cod'])->name('cod');

Route::post('/changePassword', [App\Http\Controllers\UsersController::class, 'updatePassword']);