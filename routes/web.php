<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('blogs',[
        'blogs'=>Blog::all(),
        'categories'=>Category::all()
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    
    return view('blog',[
        'blog'=>$blog,
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
    ]);
})->where('blog','[A-z\d\-_]+');
Route::get('/users/{user:username}', function (User $user) {
    
     return view('blogs',[
        'blogs'=>$user->blogs,
        'categories'=>Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    
    return view('blogs',[
       'blogs'=>$category->blogs,
       'categories'=>Category::all(),
       'currentCategory'=>$category 
   ]);
});
    









