<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
        }

        header{
            height: 75px;
            background-color: transparent;
            border-bottom: 1px solid rgba(211,211,211,0.5);
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            display: flex;
            justify-content: right;
            align-items: center;
            position: fixed;
            z-index: 1;
            width: 100%;
        }

        header nav a{
            color: white;
            text-decoration: none;
            margin: 0 1rem;
        }

        .jumbo-container{
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .jumbo-container img{
            height: 100%;
            width: 100%;
            filter: brightness(0.6);

        }

        .jumbo-container h1{
            font-size: xxx-large;
            font-weight: 100;
            position: absolute;
            color: white;
        }

        .jumbo-container h1 em{
            font-weight: 900;
            font-style: normal;
        }

        .posts-container, .post{
            display: flex;
            justify-content: space-around;
            margin-top: 1rem;
        }

        .post{
            display: flex;
            flex-direction: column;
            text-align: center;
            position: relative;
            align-items: center;
        }

        .post img{
            filter: brightness(0.7);
        }

        .post h2{
            position: absolute;
            bottom: 3%;
            color: white;
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
        <div class="jumbo-container">
            <img src="https://picsum.photos/id/1063/1920/1080" alt="">
            <h1>WELCOME TO MY FIRST <em>LARAVEL</em> WEB PAGE</h1>
        </div>
        <div class="posts-container">
            @foreach ($posts as $post)
            <div class="post">
                <img src="{{$post['image']}}" alt="">
                <h2>{{$post['title']}}</h2>
            </div>
            @endforeach
        </div>    

    </main>
</body>
</html>
