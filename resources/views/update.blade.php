<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Game</title>
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
    <form enctype="multipart/form-data" action="/manage/{{$data->id}}/update" method="post">
        <h2>Update Game</h2>
        {{method_field('PUT')}}
        @csrf
        <div class="input-placeholder">
            <p>Game Description</p>
            <textarea class="desc" name="description" id="description">{{$data->description}}</textarea>
        </div>
        <div class="input-placeholder">
            <p>Game Long Description</p>
            <textarea class="longdesc" name="longdescription" id="longdescription">{{$data->description_long}}</textarea>
        </div>
        <div class="input-placeholder">
            <p>Game Category</p>
            <select name="category" id="category">
                <option value="{{$data->category}}">{{$data->category}}</option>
                @foreach ($CATEGORY as $cat)
                @if ($cat!=$data->category)
                <option value="{{$cat}}">{{$cat}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="input-placeholder">
            <p>Game Price</p>
            <input type="text" value="{{$data->price}}"name="price" id="price">
        </div>
        <div class="input-placeholder image">
            <p>Game Cover</p>
            <input type="file" accept=".jpg"name="image" id="image">
        </div>
        <div class="input-placeholder image">
            <p>Game Video</p>
            <input type="file" accept=".webm"name="video" id="video">
        </div>
        <button type="submit">Save</button>
    </form>
</div>
{{View::make('layout.footer')}}
</body>
</html>
