@extends('layout.profile')
@section('content')
<link rel="stylesheet" href="/Asset/css/myprofile.css">
<div class="heading">
    <h1>{{Auth::user()->username}} Profile</h1>
    <p>This information will be displayed publicly so be careful what you share.</p>
</div>
<div class="form-container">
    <form action="/update" enctype="multipart/form-data" method="post">
        @csrf
        <div class="general-credential">
            <div class="form-left">
                <div class="form-left-super">
                    <div class="form-left-left">
                        <div class="input-placeholder">
                            <p>Username</p>
                            <input type="text" name="username" id="username"value="{{Auth::user()->username}}">
                        </div>
                    </div>
                    <div class="form-left-right">
                        <div class="input-placeholder">
                            <p>Level</p>
                            <div class="level-box">
                                <p>{{Auth::user()->level}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-placeholder">
                    <p>Full Name</p>
                    <input type="text" name="fullname" id="fullname" value="{{Auth::user()->fullname}}">
                </div>
            </div>
            <div class="form-right">
                <img src="{{Storage::url(Auth::user()->picture)}}" alt="">
                <input type="file" name="image" accept=".png, .jpg"id="image">
            </div>
        </div>

        <div class="input-placeholder">
            <p>Current Password</p>
            <input type="password" name="old" id="" >
        </div>
        <div class="input-placeholder">
            <p>New Password</p>
            <input type="password" name="new" id="">
        </div>
        <div class="input-placeholder">
            <p>Old Password</p>
            <input type="password" name="confnew" id="">
        </div>
        <button type="submit">Update</button>
    </form>


</div>

@endsection

