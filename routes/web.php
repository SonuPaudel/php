<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use GuzzleHttp\Middleware;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
//Route::get('/login', [PagesController::class, 'login']);



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');



Route::prefix('admin/')->middleware('auth')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

    //Notice

    Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/create', [NoticeController::class, 'create'])->name('notice.create');
    Route::post('/notice/store', [NoticeController::class, 'store'])->name('notice.store');
    Route::get('/notice/{id}/edit', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('/notice/{id}/update', [NoticeController::class, 'update'])->name('notice.update');
    Route::post('/notice/delete', [NoticeController::class, 'delete'])->name('notice.delete');

    //Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/{gallery}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/delete', [GalleryController::class, 'delete'])->name('gallery.delete');



    //News
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/news/{news}/update', [NewsController::class, 'update'])->name('news.update');
    Route::post('/news/delete', [NewsController::class, 'delete'])->name('news.delete');

    //Users
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/delete', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
