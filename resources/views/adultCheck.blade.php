<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/ageCheck.css">
    <title>Age Check</title>
</head>
<body>
    {{View::make('layout.header')}}
    <?php $years = range(1900, strftime("%Y", time())); ?>
    <div class="container">
        <div class="box">
            <img src="{{Storage::url($data->cover)}}" alt="">
            <div class="box-container">
                <h1>CONTENT IN THIS PRODUCT MAY NOT BE APPROPRIATE FOR ALL AGES, OR MAY NOT BE APPROPRIATE FOR VIEWING AT WORK.</h1>
                <div class="warning-box">
                    <form action="/home/gameDetail/{{$data->id}}/checkAge" method="POST">
                        @csrf
                        <div class="top">
                            <h1>PLEASE ENTER YOUR BITHDATE</h1>

                            <div class="form-container">
                                <select class="day"name="day" id="day">
                                    <option value="">Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select class="month"name="month" id="month">
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select class="year"name="year" id="year">
                                    <option value="">Year</option>
                                    @foreach ($years as $year)
                                    <option value="{{$year}}">{{$year}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="btn-container">
                            <button type="submit">View Page</button>
                            <a href="/">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>

    {{View::make('layout.footer')}}

</body>
</html>

