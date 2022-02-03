<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/Asset/css/manageGame.css">
    <title>Manage Games</title>
</head>

<body>
    {{View::make('layout.header')}}


    <div class="isi-content">
        <div class="judul">
            <h1>Manage Games</h1>
            <h3>Search Game by Name</h3>
        </div>
        <div class="search-container">
            <form action="">
                <input type="text" name="searchgame" id="searchgame">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="list-game">
            @foreach ($data as $datas)
            <div class="kotak">
                <img src="{{Storage::url($datas->cover)}}" alt="">
                <div class="containers-form">
                    <div class="container-buttons">
                        <a href="/manage/{{$datas->id}}">Update</a>
                    </div>
                    <form action="/manage/{{$datas->id}}/delete">
                        <button id="checkoutbtn" type="submit" class="btn btn-primary">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        {{$data->withQueryString()->links()}}
    </div>

    {{View::make('layout.footer')}}
</body>

</html>
