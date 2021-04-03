<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\welcomecontroller::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view_movie/{id}', [App\Http\Controllers\HomeController::class, 'view_movie'])->name('view_movie');
Route::get('/admin_home', [App\Http\Controllers\admin_controller::class, 'admin_home'])->name('admin_home');
Route::get('/add_movie', [App\Http\Controllers\admin_controller::class, 'add_movie'])->name('add_movie');
Route::post('/insert_movie', [App\Http\Controllers\admin_controller::class, 'insert_movie'])->name('insert_movie');
Route::get('/find_movie', [App\Http\Controllers\admin_controller::class, 'find_movie'])->name('find_movie');
Route::post('/update_movie', [App\Http\Controllers\admin_controller::class, 'update_movie'])->name('update_movie');
Route::post('/remove_movie', [App\Http\Controllers\admin_controller::class, 'remove_movie'])->name('remove_movie');

Route::post('/comment_add', [App\Http\Controllers\admin_controller::class, 'comment_add'])->name('comment_add');
Route::get('/pending_comment', [App\Http\Controllers\admin_controller::class, 'pending_comment'])->name('pending_comment');
Route::post('/update_movie_comment', [App\Http\Controllers\admin_controller::class, 'update_movie_comment'])->name('update_movie_comment');
Route::post('/reject_comment', [App\Http\Controllers\admin_controller::class, 'reject_comment'])->name('reject_comment');
Route::post('/accept_comment', [App\Http\Controllers\admin_controller::class, 'accept_comment'])->name('accept_comment');

Route::get('/admin_user_register', [App\Http\Controllers\admin_controller::class, 'admin_user_register'])->name('admin_user_register');
Route::post('/user_register', [App\Http\Controllers\admin_controller::class, 'user_register'])->name('user_register');
Route::get('/find_user', [App\Http\Controllers\admin_controller::class, 'find_user'])->name('find_user');
Route::post('/update_user_details', [App\Http\Controllers\admin_controller::class, 'update_user_details'])->name('update_user_details');
Route::post('/remove_user', [App\Http\Controllers\admin_controller::class, 'remove_user'])->name('remove_user');
