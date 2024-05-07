@extends('layout')
@section('content')
@if(true)
        This is conditional content.
    
    @endif
  @foreach($blogs as $blog) 
  <div class="{{ $loop->even ? "bg-blue" : ""}}">
  <h1><a href="blogs/{{ $blog->slug; }}">{{$blog->title; }}</a></h1>
    <div>
        <p>Published at : {{ $blog->date; }}
        <p>{{ $blog->intro; }}</p>
    </div>
  </div>
    @endforeach;
@endsection
    
    
    
   
