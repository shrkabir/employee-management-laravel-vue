<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\settings\CityController;
use App\Http\Controllers\Backend\Settings\StateController;
use App\Http\Controllers\Backend\Settings\CountryController;
use App\Http\Controllers\Backend\Settings\DepartmentController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::post('users/{id}/change-pssword', [UserController::class, 'changePassword'])->name('users.change-password');
//System Management Routes
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
Route::resource('departments', DepartmentController::class);
Route::get('{any}', function(){
    return view('employee.index');
})->where('{any}', '.*');
