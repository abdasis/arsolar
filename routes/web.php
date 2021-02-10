<?php

use App\Http\Controllers\Backend\BeritaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\Backend\ProductController as BackendProductController;
use App\Http\Controllers\Backend\ProyekController as BackendProyekController;
use App\Http\Controllers\Backend\SiteController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProyekController;
use App\Http\Controllers\MenuController;
use App\Http\Livewire\Produk\Translate;
use App\Http\Livewire\Setting\Beranda;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [HomeController::class, 'index'])->name('beranda.home');
Route::post('images/upload', [BackendProductController::class, 'uploadImage'])->name('image.upload')->middleware('auth');
Route::resource('produk', ProductController::class);
Route::resource('contact-us', ContactController::class);
Route::resource('proyek', ProyekController::class);
Route::get('about-us', [PageController::class, 'aboutUs'])->name('aboutus');
Route::get('berita', [PageController::class, 'berita'])->name('berita');
Route::get('berita/{berita}.html', [PageController::class, 'singleBerita'])->name('berita.single');
Route::get('trading', [PageController::class, 'trading'])->name('trading');
Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('transformer', [PageController::class, 'transformer'])->name('transformer');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('product-translate/{slug}', Translate::class)->name('product.translate');
    Route::resource('/product', BackendProductController::class);
    Route::resource('/kategori', CategoryController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/project', BackendProyekController::class);
    Route::resource('/berita', BeritaController::class, ['as' => 'admin']);
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/general', [SiteController::class, 'general'])->name('admin.setting.general');
        Route::post('/general', [SiteController::class, 'storeGeneral'])->name('admin.setting.store-general');
        Route::get('/seo', [SiteController::class, 'seo'])->name('admin.setting.seo');
        Route::get('/contact-us', [SiteController::class, 'contact'])->name('admin.setting.contact');
        Route::post('/contact-us', [SiteController::class, 'storeContact'])->name('admin.setting.store-contact');
        Route::get('/about-us', [SiteController::class, 'about'])->name('admin.setting.about');
        Route::post('/about-us', [SiteController::class, 'storeAbout'])->name('admin.setting.store-about');
        Route::resource('/setting', SiteController::class, ['as' => 'admin']);
        Route::get('beranda', Beranda::class)->name('setting.beranda');
        Route::resource('/menu', MenuController::class);
    });
});

Route::get('/translate/{bahasa}', function ($bahasa) {
    Session::put('bahasa', $bahasa);
    App::setLocale(Session::get('bahasa'));
    return redirect()->back();
})->name('bahasa');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
