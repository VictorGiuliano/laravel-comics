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
</body>
</html>