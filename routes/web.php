<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\postscontroller;

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


Route::get('/posts',[postscontroller :: class ,"index"])->name("posts")->middleware(middleware:'auth');

Route::group([middleware=>['auth']],
function(){
   
    Route::get('/posts/create',[postscontroller :: class ,"create"])->name("posts.create");
    Route::post('/posts',[postscontroller :: class ,"store"])->name("posts.store");
    Route::DELETE('/posts/{post}',[postscontroller :: class ,"destroy"])->name("destroy");
    Route::get('/posts/{post}',[postscontroller :: class ,"show"])->name("posts.show");
    Route::put('/postsupdate/{Id}' , [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{post}/edit',[postscontroller :: class ,"edit"])->name("posts.edit");
    Route::get('/posts/restore' , [PostController::class, 'restore'])->name('posts.restore');
});
Routes::get("/lagout", [PostController::class, 'logout'])->name("logout");-
Routes::get("/lagin", [PostController::class, 'login'])->name("login");-


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
