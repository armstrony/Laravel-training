@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ "css/gallery.css" }}" type="text/css">
@endsection
@section('body')
    <!-- Art Section -->
    <div class="" id="top">
        <div class="container">
            <div class="row big-title">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <hr class="animate__animated animate__zoomIn" style="animation-delay: .5s;">
                </div>
            </div>
            <div class="row">
                @foreach ($art as $item)
                <div class="col-lg-4 col-md-6 box-art">
                    <div class="single-art">
                        <img src="img/{{ $item->image }}" alt="">
                        <div class="text-content">
                            <h4>Art {{ $loop->index+1 }}</h4>
                            <h5>{{ $item->title }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Art Section -->

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