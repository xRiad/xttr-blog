<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\AboutCardController;
use App\Http\Controllers\Admin\AboutEmployeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LetterController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AuthController;
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
Route::get('/search/{category}', [SearchController::class, 'byCategory'])->name('search.category');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/save', [ContactController::class, 'saveLetter'])->name('contact.save');
Route::post('/comment/save/{postid}', [CommentController::class, 'save'])->name('comment.save');


Route::get('/posts/random', [PostController::class, 'random'])->name('posts.random');
Route::get('/posts/detail/{post}', [PostController::class, 'detail'])->name('posts.detail');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login-check', [AuthController::class, 'loginCheck'])->name('login-check');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin.auth'], function () {
  Route::get('/', fn () => view('admin.index'))->name('index');
  Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');

  Route::get('/about/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
  Route::put('/about/update', [AdminAboutController::class, 'update'])->name('about.update');

  Route::resource('posts', AdminPostController::class)->names('posts');
  Route::resource('/about-cards', AboutCardController::class)->names('about-cards');
  Route::resource('/about-employes', AboutEmployeController::class)->names('about-employes');
  Route::resource('/categories', CategoryController::class)->names('categories');
  Route::resource('/statuses', StatusController::class)->names('statuses');
  Route::resource('/tags', TagController::class)->names('tags');
  Route::get('/contact/edit', [AdminContactController::class, 'edit'])->name('contact.edit');
  Route::put('/contact/update', [AdminContactController::class, 'update'])->name('contact.update');
  Route::get('/letters', [LetterController::class, 'index'])->name('letter');
  Route::delete('/letters/delete/{letter}', [LetterController::class, 'delete'])->name('letter.delete');
});
