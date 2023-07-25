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
use App\Http\Controllers\Admin\TagController;
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

Route::get('/admin', fn () => view('admin.index'));
Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts');
// Route::get('/admin/posts/creation', [PostController::class, 'creation'])->name('admin.posts.creation');

Route::get('/admin/about/edit', [AdminAboutController::class, 'edit'])->name('admin.about.edit');
Route::put('/admin/about/update', [AdminAboutController::class, 'update'])->name('admin.about.update');

Route::resource('admin/about-cards', AboutCardController::class)->names('admin.about-cards');
Route::resource('admin/about-employes', AboutEmployeController::class)->names('admin.about-employes');
Route::resource('admin/categories', CategoryController::class)->names('admin.categories');
Route::resource('admin/statuses', StatusController::class)->names('admin.statuses');
Route::resource('admin/tags', TagController::class)->names('admin.tags');
Route::get('/admin/contact/edit', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
Route::put('/admin/contact/update', [AdminContactController::class, 'update'])->name('admin.contact.update');
Route::get('/admin/letters', [LetterController::class, 'index'])->name('admin.letter');
Route::delete('/admin/letters/delete/{letter}', [LetterController::class, 'delete'])->name('admin.letter.delete');
