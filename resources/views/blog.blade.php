<x-layout>
  <x-slot name="title">
    <title>{{$blog->title}}</title>
  </x-slot>
<h1>{{$blog->title}}</h1>
 <p>Published at : {{$blog->date}}</p>
 <p>{!!$blog->body!!}</p>
   <a href="/">go back</a>
</x-layout>

 
 
 
 
 
