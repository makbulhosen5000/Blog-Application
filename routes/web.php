<?php

use App\Http\Controllers\Backend\CategoryController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// group middleware start from here for Admin Panel
Route::group(['middleware' => ['blog']], function () {
    Route::prefix('users')->group(function () {
    Route::get('/all',[App\Http\Controllers\Backend\UserController::class,'index'])->name('users.all');
    Route::get('/create',[App\Http\Controllers\Backend\UserController::class,'create'])->name('users.create');
    Route::post('/store',[App\Http\Controllers\Backend\UserController::class,'store'])->name('users.store');
    Route::get('/edit/{id}',[App\Http\Controllers\Backend\UserController::class,'edit'])->name('users.edit');
    Route::post('/update/{id}',[App\Http\Controllers\Backend\UserController::class,'update'])->name('users.update');
    Route::get('/destroy/{id}',[App\Http\Controllers\Backend\UserController::class,'destroy'])->name('users.destroy');
    });
    Route::prefix('category')->group(function () {
    //_Categories Route_//
    Route::resource('/categories',CategoryController::class);
    });
});
// group middleware End here



