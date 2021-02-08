<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CraftController;
use App\Http\Controllers\GroupController;
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
    return view('index');
})->name('index');


Route::resources([
    'groups' => GroupController::class,
    'contacts' => ContactController::class,
    'crafts' => CraftController::class,
]);






// Route::middleware(['auth'])->get('/admin', function () {
//     return view('admin.includes.app');


// })->name('admin');
