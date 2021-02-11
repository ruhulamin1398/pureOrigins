<?php


use App\Http\Controllers\BannerController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Models\serviceCategory;
use App\Models\setting;
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

    return view('admin.includes.app');

})->name('admin');


Route::resource('banners',BannerController::class);
Route::resource('services',ServiceController::class);
Route::resource('gallery',GalleryController::class);
Route::resource('gallery-categories',GalleryCategoryController::class);
Route::resource('images',ImageController::class);
Route::resource('setting',SettingController::class);
Route::resource('service-category',ServiceCategoryController::class);

