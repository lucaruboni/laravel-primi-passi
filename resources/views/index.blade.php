<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

        <!-- Styles -->
        <style>
            header{
                height: 200px;
                background-color: red;
                border-bottom: black;
                box-shadow: 0 0 15px black;
            }
        </style>
     
    </head>
    <body>
 
        <header class='d-flex flex-column gap-4 pt-5'>

            <div class="link_box ps-5">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('your_film') }}">Your Film</a>
            </div>

            <h1 class='ps-5'>{{$web_title}}</h1>

        </header>


        <ul class='ps-5 pt-5'>
            @foreach($films as $film)
            
                    <li>
                        {{$film}}
                    </li>
           
            @endforeach
        </ul>

        <p class='ps-5'>Genre: {{$genre}}</p>
    </body>
</html>
