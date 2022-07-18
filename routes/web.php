<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


Route::group(['middleware' => 'auth', 'isAdmin'], function () {
    Route::resource('company', \App\Http\Controllers\CompanyController::class);

    Route::resource('employee', \App\Http\Controllers\EmployeeController::class);
});
//route::resource('company', 'CompanyController@index');
//::resource('/company', 'CompanyController@index');
//route::resource('/employee', \App\Http\Controllers\EmployeeController::class);
