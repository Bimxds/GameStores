<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/profile.css"/>
    <title>Profile</title>
</head>
<body>
    {{View::make('layout.header')}}
    @php
        $username = Session::get('user')['username'];
        $PATHS = 'account/'.$username;
    @endphp
    <div class="container">
        @if ($errors->any())
        <div class="error-box">
            <strong>Ooops! Something Went Wrong</strong>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </div>
        @endif
        <div class="container-box">
            <div class="lefty">
                <a class="item {{ (request()->is($PATHS.'/profile')) ? 'active' : '' }}" href="/account/{{Session::get('user')['username']}}/profile">
                    <i class="bi bi-person-circle"></i>
                    Profile
                </a>
                @if (Auth::user()->role=='User')
                <a class="item {{ (request()->is($PATHS.'/friends')) ? 'active' : '' }}"href="/account/{{Session::get('user')['username']}}/friends">
                    <i class="bi bi-heart"></i>
                    Friends
                </a>
                <a class="item {{ (request()->is($PATHS.'/history')) ? 'active' : '' }}"href="/account/{{Session::get('user')['username']}}/history">
                    <i class="bi bi-collection"></i>
                    Transaction History
                </a>
                @endif
            </div>
            <div class="righty">
                @yield('content')
            </div>
        </div>
    </div>

    {{View::make('layout.footer')}}
</body>
</html>
