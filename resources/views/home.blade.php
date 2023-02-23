@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'home')
</head>
<body>
    <main>
        @section('content')
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
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
                <div class="comics-card">
                    <img src="" alt="comic.series">
                    <h4>AAA</h4>
                </div>
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
        @endsection
    </main>
</body>
</html>