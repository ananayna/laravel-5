@extends('master')

@section('page_title')
Create Post
@endsection

@section('midel_part')
<section>
<div class="container mt-3">
    <p class="h1 text-center text-capitalize">Add Post</p>
    <hr class="w-80" />

    <div class= "w-50 mx-auto mt-4">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>author name</label>
                <input type="text" class="form-control" name="author" />
                @error('author')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>Post title</label>
                <input type="text" class="form-control" name="title" />
                @error('title')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control" name="due_date" />
                @error('due_date')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>description</label>
                <textarea type="text" class="form-control" name="description"></textarea>
                @error('description')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-warning col-lg-12">Uplode</button>
        </form>
    </div>

</div>
</section>
@endsection
