<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Dc Comics</title>
</head>
<body>
    <header>
            <nav class="navbar">
                <div class="navbar-logo container"><i class="fa-brands fa-discord"></i>
                    <img src="{{asset('images/dc-logo.png')}}">
                </div>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="#">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">COLLECTIBLES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                        <li><input type="text" placeholder="Search.."></li>
                    </ul>
                </div>
            </nav>
    </header>
    <main>
        <div class="Jumbotron"></div>
        <div class=" bkg-b container">
            <div class="label stick">
                <h1>CURRENT SERIES</h1>
            </div>
            <div class="card-container">
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
            </div>
            <button class="btn btn-more">
                <h1>LOAD MORE</h1>
            </button>
        </div>
        <section class="bonus">
            <div class=" bkg-bl"></div>
        </section>
    </main>
</body>
</html>