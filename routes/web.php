<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
=======
>>>>>>> 06dec90e0422590fb2a4f43a331befcf74fde90e

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

<<<<<<< HEAD


=======
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('kendaraans', KendaraanController::class);


 
>>>>>>> 06dec90e0422590fb2a4f43a331befcf74fde90e
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
<<<<<<< HEAD

Route::group(['middleware' => 'auth'], function () {    
    Route::resource('kendaraans', KendaraanController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

=======
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::resource('kendaraans', KendaraanController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
>>>>>>> 06dec90e0422590fb2a4f43a331befcf74fde90e
});