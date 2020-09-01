<?php

use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/vendor', 'PagesController@vendor');




//Admin Routes
// Route::GET('/home', 'Bitfumes\Multiauth\Http\Controllers\AdminController@index')->name('admin.home');
Route::resource('/admin/post', 'Admin\PostController');
Route::resource('/admin/vendor', 'Admin\VendorController');
Route::resource('/admin/product', 'Admin\ProductController');
Route::resource('/admin/service', 'Admin\ServiceController');
Route::resource('/admin/categorie', 'Admin\CategorieController');
Route::resource('/admin/manufactor', 'Admin\ManufactorController');
Route::resource('/admin/oportunitie', 'Admin\OportunitieController');
Route::resource('/admin/business', 'Admin\BusinessController');
Route::resource('/admin/setting', 'Admin\SettingController')->middleware('role:super');
Route::resource('/admin/user', 'Admin\UserController')->middleware('role:super');

