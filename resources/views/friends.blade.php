@extends('layout.profile')
@section('content')
<link rel="stylesheet" href="/Asset/css/friends.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<div class="heading">
    <h1>Friends</h1>
</div>

<h3>Add Friends</h3>
<div class="input-placeholder">
    <form action="">
        <input type="text" name="search" id="search">
        <button type="submit">
            Add
        </button>
    </form>
</div>


<div class="contents">
    <h3>Incoming Friend Request</h3>
</div>

<div class="contents">
    <h3>Pending Request</h3>
</div>
<div class="contents">
    <h3>Your Friends</h3>
</div>

@endsection
