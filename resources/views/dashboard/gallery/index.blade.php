@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Art</h1>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive">
    <a class="btn btn-success p-1 mt-1 mb-3" href="/dashboard/gallery/create">Create Art</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($arts as $art)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $art->title }}</td>
                <td>{{ $art->image }}</td>
                <td>
                    {{-- create edit and delete button --}}
                    <a class="btn btn-primary p-1" href="/dashboard/gallery/{{ $art->id }}/edit">Edit</a>
                    <form action="{{ route('gallery.destroy', $art->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger p-1" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection