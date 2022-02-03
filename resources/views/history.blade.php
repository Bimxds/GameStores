@extends('layout.profile')
@section('content')
<link rel="stylesheet" href="/Asset/css/history.css">

@foreach ($data as $item)
<div class="box">
    <h3>Transaction Date : {{$item->created_at}}</h3>
    <div class="image">
        @foreach ($item->detail as $details)
        <img src="{{Storage::url($details->game[0]->cover)}}" alt="">
        @endforeach
    </div>
    <h3>Total Price Rp. {{$item->totalPrice}}</h3>
</div>
@endforeach

@endsection
