<?php

use App\Http\Controllers\FrontController;
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

//ajax
Route::post('/get-product', 'AjaxController@get_product')->name('get_product');
Route::get('/get-product',function() {
  abort(404);
});


// lang
Route::get('/lang/{lang}', 'ChangeLanguageController@index')->name('lang');


Route::get('/','FrontController@index')->name('home');
Route::get('/about','FrontController@about')->name('about');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/article','FrontController@article')->name('article');
Route::get('/article/{slug}','FrontController@article_detail')->name('article_detail');
Route::get('/product/{slug}','FrontController@product')->name('product');
Route::get('/product',function() {
  return redirect('/#product');
});
Route::get('/privacy-policy','FrontController@privacy_policy')->name('privacy-policy');

Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeLoginController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
    
 
});

Route::post('AboutBanner', 'ABController@store')->name('AboutBanner.store');
Route::resource('AboutBanner','ABController');
Route::resource('About_contact','AboutContactController');
Route::resource('About_content','AboutContentController');
Route::resource('About_our_plantation','AboutOurPlantationsController');
Route::resource('About_our_value','AboutOurValuesController');
Route::resource('Article','ArticleController');
Route::resource('Available_olshop','AvailableOlshopController');