<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Twitty</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//bootswatch.com/4/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0; }
        .full-height { height: 100vh; }
        .position-ref { position: relative; }
        #main-wrapper { margin-top: 20px; }
    </style>
</head>
<body>
<div class="position-ref full-height">

    @include('layouts.navbar')

    <div id="main-wrapper">

        <div class="container">
            @if(!empty($tweets))
                @foreach($tweets as $tweet)
                    <div class="card border-primary mb-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $tweet->text }}
                                <i class="icon ion-heart"></i> {{ $tweet->favorite_count }}
                                <i class="icon ion-refresh"></i> {{ $tweet->retweet_count }}</h4>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No tweets found.</p>
            @endif
        </div>

    </div>

    @include('layouts.scripts')

</div>
</body>
</html>
