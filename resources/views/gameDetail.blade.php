<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Detail</title>
    <link rel="stylesheet" href="/Asset/css/gameDetail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    {{View::make('layout.header')}}
    <div class="content">
        @if ($errors->any())
        <div class="error-box">
            <strong>Ooops! Something Went Wrong</strong>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </div>
        @endif
        <div class="container">
            <div class="container-left">
                <video controls autoplay muted loop>
                    <source src={{Storage::url($data->video)}} type="video/webm">
                </video>
            </div>
            <div class="container-right">
                <img src="{{Storage::url($data->cover)}}" alt="">
                <h1>{{$data->name}}</h1>
                <p>{{$data->description}}</p>
                <div class="details">
                    <h3>Genre: </h3>
                    <div class="space"></div>
                    <p>{{$data->category}}</p>
                </div>
                <div class="details">
                    <h3>Developer: </h3>
                    <p>{{$data->developer}}</p>
                </div>
                <div class="details">
                    <h3>Publisher:</h3>
                    <p>{{$data->publisher}}</p>
                </div>
            </div>
        </div>
        <div class="content-2">
            <h1>Buy {{$data->name}}</h1>
        </div>
        <div class="buy">
            <form action="/addToCart" method="post">
                @csrf
                <input type="hidden" name="game_id" value="{{$data->id}}">
                <button type="submit">Rp. {{$data->price}}  | <i class="bi bi-cart-plus"></i> Add to Cart</button>
            </form>
            {{-- <a href="#">
                Rp. {{$data->price}}  | <i class="bi bi-cart-plus"></i> Add to Cart
            </a> --}}
        </div>

        <div class="content-3">
            <div class="title">
                <h1>ABOUT THIS GAME</h1>
            </div>
            <div class="game-description">
                <p>{{$data->description_long}}</p>
            </div>
        </div>



    </div>


    {{View::make('layout.footer')}}
</body>

</html>
