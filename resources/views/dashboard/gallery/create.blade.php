@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Art</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/gallery" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namaArt" class="form-label">Nama Art</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="namaArt" name="title">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection