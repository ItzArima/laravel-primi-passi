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

        header nav a:hover{
            border-bottom:2px solid white;
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

        .jumbo-container h2{
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 1rem;
            color: white;
            font-weight: 100;
        }

        .jumbo-container h1 em{
            font-weight: 900;
            font-style: normal;
        }

        .section-title{
            width: 100%;
            height: 100px;
            overflow: hidden;
            position:relative;
            background-color: #0b0c0c;
            background-position: center 50%;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .section-title h2{
            font-weight: 100;
        }

        .section-title em{
            font-weight: 900;
            font-style: normal;
        }

        .posts-container{
            display: flex;
        }

        .post{
            display: flex;
            flex-direction: column;
            text-align: center;
            position: relative;
            align-items: center;
            width: 20%;
            overflow: hidden;
            cursor: pointer;
        }

        .post img{
            filter: brightness(0.7);
            width: 100%;
            transition: all 0.3s;
        }

        .post-text{
            position: absolute;
            bottom: -1%;
            color: white;
            transition: all 0.3s;
            height: 10%;
        }

        .post:hover .post-text{
            bottom: 10%;
        }

        .post:hover img{
            filter: brightness(0.5);
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
