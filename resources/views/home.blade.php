<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="./home_style.css">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        header{
            height: 50px;
            background-color: #1a2b3c;
            display: flex;
            justify-content: right;
            align-items: center;
        }

        header nav a{
            color: white;
            text-decoration: none;
            margin: 0 1rem;
        }

        .posts-container, .post{
            display: flex;
            justify-content: space-around;
        }

        .post{
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .active{
            border-bottom:2px solid white;
        }
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
        <div class="posts-container">
            @foreach ($posts as $post)
            <div class="post">
                <img src="{{$post['image']}}" alt="">
                <span>{{$post['title']}}</span>
            </div>
            @endforeach
        </div>    

    </main>
</body>
</html>
