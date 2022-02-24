<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');

Route::get('/manage-student', [StudentController::class, 'manage'])->name('manage-student');

Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');

Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::post('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-student');


Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');

Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('/update-blog/{id}', [StudentController::class, 'updateBlog'])->name('update-blog');


Route::get('/add-blog', [BlogController::class, 'index'])->name('add-blog');
Route::post('/new-blog', [BlogController::class, 'blogCreate'])->name('new-blog');
