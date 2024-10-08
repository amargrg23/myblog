@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-2">
    <h2>Blog Posts</h2>
    <a class="btn btn-primary" href="{{ route('posts.create') }}">Create New Post</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Body</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
