<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/home.css">
    <title>Home</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="title">
            <h1>Top Games</h1>
        </div>

        <div class="game-container">
            @foreach ($data as $items)
            <a href="/home/gameDetail/{{$items->id}}">
                <div class="box" style="background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ), url({{Storage::url($items->cover)}}); background-size: 100%; ">
                    <div class="detail-box">
                        <h4>{{$items->name}}</h4>
                        <p>{{$items->category}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="search-navbar {{ (request()->is('home')) ? '' : 'active' }}">
            {{$data->withQueryString()->links()}}
        </div>



    </div>

    {{View::make('layout.footer')}}
</body>
</html>


