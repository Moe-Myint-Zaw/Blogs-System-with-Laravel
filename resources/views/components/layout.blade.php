<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{$title}}
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .bg-blue{
        background-color:lightblue;
    }
</style>
<body>
   <x-navbar/>
    {{$slot}}
</body>
</html>