<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->where('blog','[A-z\d\-_]+');

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');
Route::post('logout',[AuthController::class,'logout'])->middleware('auth');
Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');


    









