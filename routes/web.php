<?php
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->where('blog','[A-z\d\-_]+');
Route::get('/users/{user:username}', function (User $user) {
    
     return view('blogs',[
        'blogs'=>$user->blogs,
        'categories'=>Category::all(),
    ]);
});

    









