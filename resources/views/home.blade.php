<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        
    </style>
</head>
<body>
    <header>
        <nav>
            <a class="active" href="{{ url('/') }}">Home</a>
            <a href="{{ url('blog') }}">Blog</a>
            <a href="{{ url('about') }}">About Us</a>
            <a href="{{ url('contacts') }}">Contacts</a>
        </nav>
    </header>
    <main>
        <div class="jumbo-container">
            <img src="https://picsum.photos/id/1063/1920/1080" alt="">
            <h1>WELCOME TO MY FIRST <em>LARAVEL</em> WEB PAGE</h1> 
        </div>
        <div class="section-title">
            <h2>Check out our <em>Gallery</em></h2>
        </div>
        <div class="posts-container">
            @foreach ($posts as $post)
            <div class="post">
                <img src="{{$post['image']}}" alt="">
                <div class="post-text">
                    <h2>{{$post['title']}}</h2>
                    <p>{{$post['description']}}</p>
                </div>    
            </div>
            @endforeach
        </div>    

    </main>
</body>
</html>
