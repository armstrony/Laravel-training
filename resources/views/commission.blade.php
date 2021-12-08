@extends('layouts.main')
@section('head')
<link rel="stylesheet" href="{{ "css/commission.css" }}" type="text/css">
@endsection
@section('body')
<div class="container">
    <div class="row card-content">
        <div class="col-md-6">
            <img src="https://source.unsplash.com/random/1982x1089" class="img-fluid" alt="commiart">
        </div>
        <div class="col-md-6 form-content">
            <h3>Request Your Art Here!</h3>
            <hr class="bg-success">
            <form action="Admin/input.php" id="form1" class="form-gist" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control main-form" placeholder="Input Your Email Here!" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control main-form" placeholder="Input Your Name Here!" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Description</label>
                    <textarea name="deskripsi" cols="35" rows="12" class="form-control main-form" style="resize: none;" placeholder="Give Your Description Or Link To Any References Here" required></textarea>
                </div>
                <input type="hidden" name="id_page" value="2">
                <button class="btn btn-primary tombol-submit">Submit Now!</button>
            </form>
        </div>
    </div>
</div>

<!-- Parallax -->
<div class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Already Create <span>Commision</span>? Reveal Your Order Status<span> Here</span>!</h2>
            </div>
            <div class="col-lg-6">
                <form action="Admin/checkid.php" id="form2" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="id_order" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Button</button>
                        </div>
                    </div>
                </form>
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