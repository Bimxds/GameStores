<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_register.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        @if ($errors->any())
        <div class="error-box">
            <strong>Ooops! Something Went Wrong</strong>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </div>
        @endif
        <div class="container-left">
            <div class="form-box">
                <h1>Register Page</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="input-placeholder">
                        <h2>Username</h2>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="input-placeholder">
                        <h2>Full Name</h2>
                        <input type="text" name="fullname" id="fullname">
                    </div>
                    <div class="input-placeholder">
                        <h2>Password</h2>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-placeholder">
                        <h2>Confirmation Password</h2>
                        <input type="password" name="confpassword" id="confpassword">
                    </div>
                    <div class="input-placeholder">
                        <h2>Role</h2>
                        <select name="role" id="role">
                            <option value="User">User</option>
                            <option value="Admin">Admin </option>
                        </select>
                    </div>
                    <button type="submit">Sign Up</button>
                    <div class="link">
                        <a href="/login">Already Have an Account?</a>
                    </div>
                </form>


            </div>
        </div>
        <div class="container-right" style="background:url({{Storage::url('Images/bg_login.jpg')}});background-size: cover; background-position: center;">

        </div>


    </div>


</body>

</html>
