<link rel="stylesheet" href="/Asset/css/header-footer.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<div class="navbar">
    <div class="navbar-left">
        <a href="/"><img src="{{Storage::url('Images/logo.svg')}}" alt=""></a>
        @guest
        @else
        @if (Session::get('user')['role']=='Admin')
        <a href="/manage">Manage Game</a>
        <a href="/insert">Insert Game</a>
        {{-- <a href="#"><i class="bi bi-cart3"></i></a> --}}
        @endif
        @endguest
    </div>

    <div class="navbar-right">
        <form action="/home/search">
            <input type="text" class="search" name="search" id="search">
        </form>
        @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        @else
        <div class="dropdowns">
            <button class="dropbtn">
                <img src="{{Storage::url(Auth::user()->picture)}}" alt="">
            </button>
            <div class="dropdown-content">
                <a href="/account/{{Session::get('user')['username']}}/profile">Profile</a>
                <a href="/logout">Logout</a>
            </div>
        </div>
        @if (Session::get('user')['role']=='User')
        {{-- <a href="#">Manage Product</a> --}}
        <a href="/cart"><i class="bi bi-cart3"></i></a>
        @endif
        @endguest
    </div>


</div>
