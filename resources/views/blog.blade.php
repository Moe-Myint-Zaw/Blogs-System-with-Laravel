@extends('layout')
@section('content')
<h1>{{$blog->title}}</h1>
 <p>Published at : {{$blog->date}}</p>
 <p>{!!$blog->body!!}</p>
   <a href="/">go back</a>
@endsection
 
 
 
 
 
