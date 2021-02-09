<?php


use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
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

 
Route::resource('banners',BannerController::class);
Route::resource('services',ServiceController::class);



Route::get('/', function () {

    return view('admin.includes.app');

})->name('admin');