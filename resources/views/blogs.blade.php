<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs System</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .bg-blue{
        background-color:lightblue;
    }
</style>
<body>
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
</body>
</html>