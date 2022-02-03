<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="/Asset/css/payment.css">
</head>
<body>
{{View::make('layout.header')}}
<div class="container">
    @if ($errors->any())
        <div class="error-box">
            <strong>Ooops! Something Went Wrong</strong>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </div>
    @endif
    <div class="box">
        <h1>Transaction Information</h1>
        <form action="/checkPayment" method="post">
            @csrf
            <div class="input-placeholder">
                <p>Card Name</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-placeholder">
                <p>Card Number</p>
                <input type="text" name="number" id="number">
            </div>
            <div class="input-placeholder">
                <p>Expired Date</p>
                <div class="exp">
                    <input type="text" name="month" id="month">
                    <input type="text" name="year" id="year">
                </div>
            </div>
            <div class="input-placeholder">
                <p>CVV</p>
                <input type="text" name="cvv" id="cvv">
            </div>
            <div class="input-placeholder">
                <p>ZIP</p>
                <input type="text" name="zip" id="zip">
            </div>
            <button type="submit">Checkout</button>
        </form>
    </div>


</div>
{{View::make('layout.footer')}}
</body>
</html>
