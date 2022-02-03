<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/Asset/css/cart.css">
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">
        <div class="title">
            <h1>Shopping Cart</h1>
        </div>
        <div class="box">
            @foreach ($data as $item)
            <div class="items">
                <div class="left">
                    <img src="{{Storage::url($item->game[0]->cover)}}" alt="">
                </div>
                <div class="middle">
                    <h2>{{$item->game[0]->name}}</h2>
                    <p>{{$item->game[0]->price}}</p>
                </div>
                <div class="right">
                    <a href="#">Delete</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="checkout">
            <h1>Total Price : {{$totalPrice}}</h1>
            <a href="/payment">Checkout</a>
        </div>
    </div>

    {{View::make('layout.footer')}}
</body>
</html>
