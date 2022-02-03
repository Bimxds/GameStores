<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Product</title>
    <link rel="stylesheet" href="/Asset/css/upadte-insert.css">
</head>
<body>
    @php
    $CATEGORY = ['Idle', 'Horror', 'Adventure', 'Action', 'Sports', 'Strategy', 'Role-Playing', 'Puzzle', 'Simulation'];
@endphp
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

<form enctype="multipart/form-data" action="/insert/game" method="post">
    <h2>Insert Game</h2>
    @csrf
    <div class="input-placeholder">
        <p>Game Name</p>
        <input type="text" name="name" id="name">
    </div>
    <div class="input-placeholder">
        <p>Game Description</p>
        <textarea class="desc" name="description" id="description"></textarea>
    </div>
    <div class="input-placeholder">
        <p>Game Long Description</p>
        <textarea class="longdesc" name="longdescription" id="longdescription"></textarea>
    </div>
    <div class="input-placeholder">
        <p>Game Category</p>
        <select name="category" id="category">
            @foreach ($CATEGORY as $cat)
            <option value="{{$cat}}">{{$cat}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-placeholder">
        <p>Game Developer</p>
        <input type="text" name="developer" id="developer">
    </div>
    <div class="input-placeholder">
        <p>Game Publisher</p>
        <input type="text" name="publisher" id="publisher">
    </div>
    <div class="input-placeholder">
        <p>Game Price</p>
        <input type="text" name="price" id="price">
    </div>
    <div class="input-placeholder image">
        <p>Game Cover</p>
        <input type="file" accept=".jpg"name="image" id="image">
    </div>
    <div class="input-placeholder image">
        <p>Game Video</p>
        <input type="file" accept=".webm"name="video" id="video">
    </div>
    <div class="checkbox-placeholder">
        <input type="checkbox" name="adult" id="adult">
        <p>Only for Adult?</p>
    </div>
    <button type="submit">Save</button>
</form>
</div>
{{View::make('layout.footer')}}
</body>
</html>
