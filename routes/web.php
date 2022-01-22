<?php

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'web']], function() {

    /*district*/
    Route::resource('district', \App\Http\Controllers\DistrictController::class, ['as' => 'dashboard']);

    /*tehsil*/
    Route::resource('tehsil', \App\Http\Controllers\TehsilController::class, ['as' => 'dashboard']);

    /*qanoongoi*/
    Route::resource('qanoongoi', \App\Http\Controllers\QanoongoiController::class, ['as' => 'dashboard']);

    /*patwar circle*/
    Route::resource('patwarcircle', \App\Http\Controllers\PatwarCircleController::class, ['as' => 'dashboard']);

});
