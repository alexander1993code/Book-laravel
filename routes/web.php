<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
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

//Route::get('/', [PageController::class, 'posts']);
//Route::get('blog/{post}', [PageController::class, 'post'])->name('post');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('App\Http\Controllers')->group(function(){

    Route::get('/', 'PageController@posts');
    Route::get('blog/{post:slug}', 'PageController@post')->name('post');
});

Route::namespace('App\Http\Controllers\Backend')->group(function(){
    
     Route::resource('posts', 'PostController')
    ->middleware('auth')
    ->except('show');
});

Route::get('/welcome', function(){
    return view('welcome');
});
