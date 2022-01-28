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
    Route::resource('PatwarCircle', \App\Http\Controllers\PatwarCircleController::class, ['as' => 'dashboard']);

    /*mauza*/
    Route::resource('mauza', \App\Http\Controllers\MauzaController::class, ['as' => 'dashboard']);

    /*Khaivet  */
    Route::resource('khaivet', \App\Http\Controllers\KhaivetController::class, ['as' => 'dashboard']);

    /*Khatooni */
    Route::resource('khatooni', \App\Http\Controllers\KhatooniController::class, ['as' => 'dashboard']);

    /*Khasra*/
    Route::resource('khasra', \App\Http\Controllers\KhasraController::class, ['as' => 'dashboard']);

});
