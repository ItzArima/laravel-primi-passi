<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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

        .active{
            border-bottom: 2px solid white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a class="active" href="{{ url('blog') }}">Blog</a>
            <a href="{{ url('about') }}">About Us</a>
            <a href="{{ url('contacts') }}">Contacts</a>
        </nav>
    </header>
    <h1>this is the blog page</h1>
</body>
</html>