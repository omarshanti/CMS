<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::get('/',[PostsController::class,'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/blog/{post}',[PostsController::class,'single'])->name('single');
Route::get('blog/categories/{id}',[PostsController::class,'category'])->name('posts.category');
Route::get('blog/tag/{id}',[PostsController::class,'tag'])->name('posts.tag');
##################### ADMIN ROUTE ##########################
Route::middleware(['auth'])->group(function () {
    ##################### POST ROUTE ##########################
Route::get('/posts/create',[PostsController::class,'create'])->name('posts.create');
Route::post('/posts/stores',[PostsController::class,'store'])->name('posts.stores');
Route::get('/posts/delete/{id}',[PostsController::class,'destroy'])->name('posts.delete');
Route::get('/posts/show',[PostsController::class,'info'])->name('posts');
Route::get('/posts/deleted/show',[PostsController::class,'trush'])->name('deleted.posts');
Route::get('/posts/deleted/show/{id}',[PostsController::class,'forcedeleted'])->name('force.delete');
Route::get('/posts/deleted/show/restore/{id}',[PostsController::class,'restoredeleted'])->name('restore.delete');
##################### CATEGORY ROUTE ##########################
Route::get('/categories/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/categories/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/categories',[CategoryController::class,'index'])->name('category');
Route::get('/categories/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('/categories/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/categories/update/{id}',[CategoryController::class,'update'])->name('category.update');
##################### TAG ROUTE ##########################
Route::get('/tags/create',[TagController::class,'create'])->name('tag.create');
Route::get('/tags/store',[TagController::class,'store'])->name('tag.store');
Route::get('/tags',[TagController::class,'index'])->name('tag');
Route::get('/tags/edit/{id}',[TagController::class,'edit'])->name('tag.edit');
Route::get('/tags/delete/{id}',[TagController::class,'destroy'])->name('tag.delete');
Route::get('/tags/update/{id}',[TagController::class,'update'])->name('tag.update');
Route::get('/admin',[UserController::class,'index'])->name('admin');
});
