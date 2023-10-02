<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;




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
    return view('welcome');
});


Route::group(['middleware'=>'auth'],  function (){
Route::resource('/product', ProductController::class);
Route::post('/product/{id}', 'ProductController@update')->name('product.update');

});

Route::group(['middleware'=>'guest'], function (){

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

});








Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




Route::group(['middleware'=>'auth'], function (){

  



Route::get('/home', [HomeController::class, 'index'])->name('product.home');
Route::get('/account', [HomeController::class, 'account'])->name('product.account');
Route::get('/settings', [HomeController::class, 'option'])->name('product.setting');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class,'index'])->name('product.home');
Route::get('/dashboard', 'HomeController@index')->name('product.dashboard');

});

