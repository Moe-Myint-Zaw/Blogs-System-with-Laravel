<x-layout>
  <x-slot name="title">
    <title>Blogs</title>
  </x-slot>
 
  @foreach($blogs as $blog) 
  <div class="{{ $loop->even ? "bg-blue" : ""}}">
  <h1><a href="blogs/{{ $blog->slug; }}">{{$blog->title; }}</a></h1>
    <div>
        <p>Published at : {{ $blog->created_at->diffForHumans(); }}</p>
        <p>Author : <a href="users/{{$blog->author->username; }}">{{$blog->author->name}}</a></p>
        <p><a href="categories/{{$blog->category->slug; }}">{{$blog->category->name}}</a></p>

        <p>{{ $blog->intro; }}</p>
    </div>
  </div>
    @endforeach
  
</x-layout>
 

    
    
    
   
