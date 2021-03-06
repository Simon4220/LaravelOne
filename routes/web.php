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
Route::get('/user/page/{slug?}', 'SiteController@page')->name('page');
Route::get('/user/material/{slug?}', 'SiteController@material')->name('material');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/page', 'PageController', ['as'=>'admin']);
    Route::resource('/material', 'MaterialController', ['as'=>'admin']);
});

Route::get('/', function () {
    return view('user.home', [
        'delimiter' => ''
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
