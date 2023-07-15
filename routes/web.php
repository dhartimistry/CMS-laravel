<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubcriptionController;

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
    return view('login');
});
Route::get('/log',[AuthController::class,'index']);
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::middleware(['is_admin'])->group(function() {

    Route::get('/signout',[AuthController::class,'logout'])->name('signout');

    Route::resource('companies', CompanyController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('subcription', SubcriptionController::class);

});
