@extends('master')

@section('page_title')
Update Post
@endsection

@section('midel_part')
<section class="mt-3">
    <div class="container">
        <div class="row ">
            <div class="card-header col-lg-6 mx-auto">
                <h1 class="text-warning text-center my-4"><b><i>{{ $post->title }}</i></b> </h1>
                <p class="bg-dark text-center text-light"> Status - <span class="badge bg-{{ $post->status ? 'info' : 'danger' }}">{{ $post->status ? 'done' : 'underdone' }}</span></p>
            </div>


            <div class="col-lg-9 mx-auto">
                <div class="card">

                    <div class="card-header">
                        <p><b>Created by - </b>{{ $post->author }}</p>
                    </div>
                    <div class="card-body">
                        <p class=""> {{ Carbon\Carbon::parse($post->due_date)->format('h:ia - d/M/Y') }}</p>
                        <p><i class="fa-solid fa-info">={{ $post->description }}</i></p>

                    </div>
                    <div class="card-footer">
                        <p> <b>Created Time </b> ={{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                        <p> <b>Updated Time</b>  ={{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
