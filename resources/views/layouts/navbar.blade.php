<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Laravel Twitty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#target-laravel-twitty-nav" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="target-laravel-twitty-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('/tweet') ? 'active' : '' }}">
                <a class="nav-link" href="/tweet">Tweet</a>
            </li>
        </ul>
    </div>
</nav>