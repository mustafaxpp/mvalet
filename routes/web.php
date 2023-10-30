<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

// Website
Route::get("/",[HomeController::class,"home"])->name('website');
Route::get("/aboutus",[HomeController::class,"aboutus"])->name('aboutus');
Route::get("/aboutus",[HomeController::class,"aboutus"])->name('aboutus');
Route::get("/booking",[HomeController::class,"booking"])->name('booking');
Route::get("/contact",[HomeController::class,"contact"])->name('contact');
Route::Post("/SendMessage",[MessageController::class,"store"])->name('message');




// Dashboard
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'] , function(){
    Route::get("/",[HomeController::class,"index"])->name('home');
});
