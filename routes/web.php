<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DAController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MidmanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

//Auth::routes(['verify' => true]);

// GENERAL SITE //
//Route::get('/hello', [MainController::class, 'landing'])->name('landing');
//Route::get('/faq', [MainController::class, 'faq'])->name('faq'); //display_table_data

Route::controller(MainController::class)->group(function () {
    Route::get('/hello', 'landing')->name('landing');
    Route::get('/faq', 'faq')->name('faq');
    Route::post('/faq', 'display_table_data')->name('display_table_data');
    Route::post('/faq/post_data', 'post_data')->name('post_data');
});


// DIGITAL ASSETS AREA //
Route::get('/digital/view', [DAController::class, 'viewer'])->name('viewer');

Route::controller(DAController::class)->group(function () {
    Route::get('/digital/asset_create', 'asset_create')->name('asset_create');
    Route::post('/digital/validate_asset_create', 'validate_asset_create')->name('validate_asset_create');
    Route::post('/digital/validate_collection_create', 'validate_collection_create')->name('validate_collection_create');
});

// MARKETPLACE SYSTEM //
Route::get('/marketplace/listing', [MarketController::class, 'listing'])->name('listing');
Route::get('/marketplace/trade_option', [MarketController::class, 'trade_option'])->name('trade_option')->middleware(['auth0.authenticate']);
Route::get('/marketplace/trade_new', [MarketController::class, 'trade_new'])->name('trade_new')->middleware(['auth0.authenticate']);
Route::get('/marketplace/trade_inventory', [MarketController::class, 'trade_inventory'])->name('trade_inventory')->middleware(['auth0.authenticate']);
Route::get('/marketplace/selected_inventory', [MarketController::class, 'trade_selected'])->name('trade_selected')->middleware(['auth0.authenticate']);
Route::get('/marketplace/view', [MarketController::class, 'view_asset'])->name('view_asset');


// USER PROFILE //

//Route::get('/home', [HomeController::class, 'view_profile'])->name('profile');

Route::get('/home/asset_created', [HomeController::class, 'asset_created'])->name('asset_created');
Route::get('/home/asset_owned', [HomeController::class, 'asset_owned'])->name('asset_owned');
Route::get('/home/asset_listed', [HomeController::class, 'asset_listed'])->name('asset_listed');
Route::get('/home/collection', [HomeController::class, 'collection'])->name('collection');

Route::controller(HomeController::class)->group(function () {
   Route::get('home','view_profile')->name('profile');
   Route::get('home/pdf','view_pdf')->name('view_pdf');
   Route::get('/home/edit_profile', 'edit_profile')->name('edit_profile');
   Route::post('/home/validate_edit_profile', 'validate_edit_profile')->name('validate_edit_profile');
    
});

// AUTH0 // 
Route::get('/',[MidmanController::class, 'checkstart'])->name('start');
//Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
//Route::get('/register', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('register');
//Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');
Route::get('/initate',[MidmanController::class, 'dbcheck'])->name('initate');
//Route::get('error_verify',[MidmanController::class, 'error_verify'])->name('error_verify');
 
Route::controller(UserController::class)->group(function () {

    //Route::get('login', 'login')->name('login');
    Route::get('login/{token?}', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('validate_register', 'validate_register')->name('validate_register');
    Route::post('validate_login', 'validate_login')->name('validate_login');

    Route::get('forgot_password',  'forgot_password')->name('forgot_password');
    Route::post('validate_forgot_password',  'validate_forgot_password')->name('validate_forgot_password'); 
    Route::get('reset_password/{token}',  'reset_password')->name('reset_password');
    Route::post('validate_reset_password', 'validate_reset_password')->name('validate_reset_password');

});

//Route::get('/verify/{token}', [VerifyController::class,'VerifyEmail'])->name('verify');