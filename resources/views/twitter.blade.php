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

            <div class="card text-white bg-info mb-3">
                @include('inc.alert')

                <div class="card-header">Compose new Tweet</div>
                <div class="card-body">
                    <form action="{{ route('post.tweet') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="tweet">Text</label>
                                <input type="text" name="tweet" id="tweet" class="form-control" placeholder="Enter text">
                            </div>
                            <div class="form-group">
                                <label for="upload-image">Upload Image</label>
                                <input type="file" name="upload-image[]" id="upload-image" multiple class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            @if(!empty($tweets))
                @foreach($tweets as $key => $tweet)
                    <div class="card border-primary mb-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $tweet->text }}
                                <i class="icon ion-heart"></i> <small>{{ $tweet->favorite_count }}</small>
                                <i class="icon ion-refresh"></i> <small>{{ $tweet->retweet_count }}</small></h4>
                            @if(!empty($tweet->extended_entities->media))
                                @foreach($tweet->extended_entities->media as $key => $val)
                                    <a href="{{ $val->media_url_https }}"><img src="{{ $val->media_url_https }}" alt="{{ $val->type }}" style="width: 100px;"></a>
                                @endforeach
                            @endif
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
