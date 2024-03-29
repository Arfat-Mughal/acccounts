<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SaleController;
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
    return view('main');
});

Route::post('/contact-us',[MainController::class,'store'])->name('store.requests');
Route::post('/subscriptions',[MainController::class,'subscriptions'])->name('store.subscriptions');

Route::namespace('Auth')->group(function () {
    Route::get('/login',[LoginController::class,'show_login_form'])->name('login');
    Route::post('/login',[LoginController::class,'process_login'])->name('login_process');
    Route::get('/register',[LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register',[LoginController::class,'process_signup'])->name('signup_process');
    Route::get('/forget-password',[LoginController::class,'forget_password'])->name('password_forget');
    Route::post('/forget_password_request',[LoginController::class,'forget_password_request'])->name('password_recovery');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('country-state-city',[CompanyController::class,'post_Country']);
    Route::post('get-states-by-country',[CompanyController::class,'getState']);
    Route::post('get-cities-by-state',[CompanyController::class,'getCity']);

    Route::get('/company/create',[CompanyController::class,'index'])->name('create.company');
    Route::post('/company/create',[CompanyController::class,'company_create'])->name('create_company');

    Route::get('/sales/customers',[SaleController::class,'index'])->name('customer.list');
    Route::get('/sales/customers/create',[SaleController::class,'create'])->name('create.customer');

});
