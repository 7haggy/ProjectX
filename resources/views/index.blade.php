<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Designer ice cream</title>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cycle.all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
@section('navigate')
    <div class="navigate">
        <nav>
            <ul class="nav nav-tabs">
                <li><a href="#" >Главная</a></li>
                <li><a href="#" >Конструктор</a></li>
                <li><a href="#" >О нас</a></li>
                <li><a href="#" >Контакты</a></li>
            </ul>
        </nav>
    </div>
@show
@section('middle')
    <div id="slider">
        <div class="first_cont">
            <div class="back" id="fBack">
                <img src="css/img/yellowBack.png" width="50" height="60">
            </div>
            <div class="first">
                <img src="css/img/grey1.png" width="110" height="110">
                <img src="css/img/purplish1.png" width="115" height="120">
                <img src="css/img/rose1.png" width="120" height="120">
                <img src="css/img/white1.png" width="120" height="120">
            </div>
            <div class="next" id="fNext">
                <img src="css/img/yellowNext.png" width="50" height="60">
            </div>
        </div>
        <div class="second_cont">
            <div class="back" id="sBack">
                <img src="css/img/greenBack.png" width="50" height="60">
            </div>
            <div class="second">
                <img src="css/img/purplish.png" width="230" height="125">
                <img src="css/img/rose.png" width="230" height="125">
                <img src="css/img/grey.png" width="230" height="125">
            </div>
            <div class="next" id="sNext">
                <img src="css/img/greenNext.png" width="50" height="60">
            </div>
        </div>
        <div class="third_cont">
            <div class="third">
                <img src="css/img/wafle.png" width="150" height="300">
            </div>
        </div>
    </div>
@show
</body>
<script type="text/javascript" src={{ asset('js/script.js') }}></script>
</html>