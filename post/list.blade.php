@extends('master')

@section('page_title')
List Post
@endsection

@section('midel_part')
<div class="container-fluid mt-3">
    <p class="h1 text-center text-capitalize  text-dark">Post List</p>
    <hr class="w-80" />
    <section>
            <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center table-hover" >
                            <thead>
                                <tr>
                                    <th>Sl. no</th>
                                    <th>Author Name</th>
                                    <th>Post Title</th>
                                    <th>Date $ Time</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $key=>$post)
                                 <tr>
                                    <td scope="row">{{ ++$key }}</td>
                                    <td scope="row">{{ $post->author }}</td>
                                    <td scope="row">{{ $post->title }}</td>
                                    <td scope="row">{{ Carbon\Carbon::parse($post->due_date)->format('h:ia - d/M/Y') }}</td>
                                    <td scope="row">{{ Str::length($post['description']) > 10 ? Str::substr($post['description'],0,10)."...":$post['description']; }}</td>
                                    <td scope="row"><span class="badge bg-{{ $post->status ? 'info' : 'danger' }}">{{ $post->status ? 'done' : 'underdone' }}</span></td>
                                    <td>
                                        <a href="{{ route('post.view', $post->id ) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('post.edit', $post->id ) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>

                                </tr>

                                @endforeach

                            <tbody>

                        </table>
                    </div>
            </div>
        </section>

@endsection
