<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_register.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        
        <div class="container-left">
            <div class="form-box">
                <h1>Login Page</h1>
                <form action="{{route('login')}}"method="post">
                    @csrf
                    <div class="input-placeholder">
                        <h2>Username</h2>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="input-placeholder">
                        <h2>Password</h2>
                        <input type="password" name="password" id="password ">
                    </div>
                    <label class="remember-me">
                        <input type="checkbox" name="" id="">
                        <span class="checkmark"></span>
                        Remember Me
                    </label>
                    <button type="submit">Login</button>
                    <div class="link">
                        <a href="/register">Don't Have an Account?</a>
                    </div>
                </form>
            </div>
            </div>
        <div class="container-right" style="background:url({{Storage::url('Images/bg_login.jpg')}});background-size: cover; background-position: center;">

        </div>
    </div>
</body>
</html>

