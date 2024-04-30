<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});

Route::get('/blogs/{blog}', function ($slug) {
    $path=__DIR__."/../resources/blogs/$slug.html";
   if(!file_exists($path)){
    return redirect('/');
   }
    $blog=cache()->remember("posts.$slug",120,function()use ($path){
        var_dump('hello');
        return file_get_contents($path);
    });
    return view('blog',[
        'blog'=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');








