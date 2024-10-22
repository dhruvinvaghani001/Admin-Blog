<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\CommentController;

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

Route::get('/dashboard', [DashboardController::class,'show'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::middleware('auth')->group(function () {
    Route::resource('admin/category',CategoryController::class);
    Route::resource('admin/post',PostController::class);
    Route::resource('admin/setting',SettingController::class);
    Route::post('admin/setting-form-post',[SettingController::class,'store']);
});

Route::get('index',[HomeController::class,'show'])->name('home');
Route::get('index/post/{id}',[HomeController::class,'postdetail'])->name('postdetail');
Route::get('index/blog-list',[HomeController::class,'showblogdetail'])->name('blogdetail');

Route::post('index/comment',[CommentController::class,'add_comment'])->name('post-comment');
