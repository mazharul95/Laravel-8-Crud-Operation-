<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Post;
use App\Http\Controllers\StudentController;
//use App\Http\Controllers\Post;
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
                // post-curd route
Route::get('/add-post',[PostController::class, 'addPost']);
Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');
Route::get('/posts',[PostController::class,'getPost']);
route::get('/posts/{id}',[PostController::class, 'getPostById']);
route::get('/delete-post/{id}',[PostController::class,'deletePost']);
route::get('/edit-post/{id}',[PostController::class,'editPost']);
route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

          /*   imageCrud_route */
Route::get('/add-student',[StudentController::class,'addStudent']);
Route::post('/add-student',[StudentController::class,'storeStudent'])->name('student.store');
Route::get('/all-students',[StudentController::class,'students']);
