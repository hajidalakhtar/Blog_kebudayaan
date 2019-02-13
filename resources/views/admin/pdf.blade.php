<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">{{$blog->title}}</h1>
    <p>{!!$blog->isi!!}</p>
   <b> artikel inih di download di <a href="http://localhost:8000/home" >BudayaIndonesia</a></b>
    </div>
    
</body>
</html>