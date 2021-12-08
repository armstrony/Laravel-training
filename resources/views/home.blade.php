@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('body')
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/random/1983x1084" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__fadeInDown" style="animation-delay: 0.5s;">
                        <span>Creating</span> For You
                    </h5>
                    <p class="animate__animated animate__fadeInUp"style="animation-delay: 0.7s;">
                        Creating The Best Product
                    </p>
                    <p>
                        <a class ="animate__animated animate__fadeInUp" style="animation-delay: 1s;" href="/commission">Request Now!</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/random/1980x1082" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__fadeInDown" style="animation-delay: 0.5s;">
                        <span>Skillful</span> Artist
                    </h5>
                    <p class="animate__animated animate__fadeInUp"style="animation-delay: 0.7s;">
                        Experienced and Professinal Artist
                    </p>
                    <p>
                        <a class ="animate__animated animate__fadeInUp" style="animation-delay: 1s;" href="/commission">Request Now!</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/random/1980x1081" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__fadeInDown" style="animation-delay: 0.5s;">
                        <span>Step by Step</span> Production
                    </h5>
                    <p class="animate__animated animate__fadeInUp"style="animation-delay: 0.7s;">Procedural Jobs For Professionality</p>
                    <p>
                        <a class ="animate__animated animate__fadeInUp" style="animation-delay: 1s;" href="/commission">Request Now!</a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
