<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/{categoryid}', [SearchController::class, 'byCategory'])->name('search.category');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/contact', [PostController::class, 'index'])->name('posts.index');
Route::post('/contact/save', [ContactController::class, 'saveLetter'])->name('contact.save');
Route::post('/comment/save/{postid}', [CommentController::class, 'save'])->name('comment.save');

Route::get('/posts/random', [PostController::class, 'random'])->name('posts.random');
Route::resource('posts', PostController::class)->names('posts');