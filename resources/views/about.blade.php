@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ "css/about.css" }}" type="text/css">
@endsection
@section('body')
    <!-- about banner -->
    <div class="jumbotron jumbotron-fluid" id="top">
        <div class="container">
            <h1 class="display-4">Creating <span>Art</span> For You!</h1>
            <a href="commision.php" class="btn btn-primary tombol-jumbo">Try it Now!</a>
        </div>
    </div>
    <!-- Jumbotron End-->

    <!-- Section 1 -->
    <!-- Skill  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 box-wrapper just">
                <div class="row" style="padding-left: 35px;">
                    <div class="col-lg images">
                        <img src="img/time.png" alt="time">
                        <h4>Experienced</h4>
                        <p>Has So Many Experience For Editing</p>
                    </div>
                    <div class="col-lg images">
                        <img src="img/checkbox.png" alt="time">
                        <h4>Trusted</h4>
                        <p>Trusted Artist,Means There's No Scamming</p>
                    </div>
                    <div class="col-lg images">
                        <img src="img/ps.png" alt="time">
                        <h4>Skillful</h4>
                        <p>Had many skills on many application</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skill End -->
        
        
        <!-- Contoh Art -->
        <div class="row ex-art">
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/random/1980x1081" alt="art-home" class="img-fluid">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-start">
                <h3>Fine Looking <span>Art</span> Just <br>For <span>The Customer</span></h3>
                <p class="w-75">We Providing The Best Art from Skillful Editor that Can Customizing Any Art As You Want!</p>
                <a href="/gallery" class="btn btn-primary tombol-reg">Peek Now!</a>
            </div>
        </div>
        <!-- Contoh Art End -->
    </div>
    <!-- Section 1 end -->
    
    <!-- Parallax -->
    <div class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Ready to <span>Create</span> Your Own <span>Art</span>?</h2>
                </div>
                <div class="col-lg-6">
                    <a href="/commission" class="btn btn-primary tombol-jumbo">Roll Now!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Ending-->

    <!-- Footer -->
    @include('layouts.partials.footer');
    <!-- Footer Ending-->
@endsection
@section('script')
    <script src="{{ ("js/scrollreveal.js") }}"></script>
@endsection
        
    