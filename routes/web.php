<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Frontend\HomeController@index')->name('beranda.home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produk', 'Frontend\ProductController');
Route::resource('contact-us', 'Frontend\ContactController');
Route::resource('proyek', 'Frontend\ProyekController');
Route::get('about-us', 'Frontend\PageController@aboutUs')->name('aboutus');
Route::get('berita', 'Frontend\PageController@berita')->name('berita');
Route::get('berita/{berita}.html', 'Frontend\PageController@singleBerita')->name('berita.single');
Route::get('trading', 'Frontend\PageController@trading')->name('trading');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/product', 'Backend\ProductController');
    Route::resource('/kategori', 'Backend\CategoryController');
    Route::resource('/slider', 'Backend\SliderController');
    Route::resource('/project', 'Backend\ProyekController');
    Route::resource('/berita', 'Backend\BeritaController', ['as' => 'admin']);
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/general', 'Backend\SiteController@general')->name('admin.setting.general');
        Route::post('/general', 'Backend\SiteController@storeGeneral')->name('admin.setting.store-general');
        Route::get('/seo', 'Backend\SiteController@seo')->name('admin.setting.seo');
        Route::get('/contact-us', 'Backend\SiteController@contact')->name('admin.setting.contact');
        Route::post('/contact-us', 'Backend\SiteController@storeContact')->name('admin.setting.store-contact');
        Route::get('/about-us', 'Backend\SiteController@about')->name('admin.setting.about');
        Route::post('/about-us', 'Backend\SiteController@storeAbout')->name('admin.setting.store-about');
        Route::resource('/setting', 'Backend\SiteController', ['as' => 'admin']);
    });
});

Route::post('/images', 'Backend\ImageController@upload')->name('image.upload');
Route::group(['prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
