<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Http\Middleware\MustBeAdmin;

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->where('blog','[A-z\d\-_]+');

Route::post('/blogs/{blog:slug}/comments', [CommentController::class,'store']);

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');
Route::post('logout',[AuthController::class,'logout'])->middleware('auth');
Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');

Route::post('/blogs/{blog:slug}/subscription', [BlogController::class,'subscriptionHandler']);

//Admin routes

Route::get('/admin/blogs/create', [BlogController::class,'create'])->middleware(MustBeAdmin::class);
Route::post('/admin/blogs/store', [BlogController::class,'store'])->middleware(MustBeAdmin::class);



    









