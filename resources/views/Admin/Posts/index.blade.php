@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Blog Posts</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create New Post</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Author</th> <!-- Added Author column -->
                    <th width="280px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        @if ($post->user)
                            {{ $post->user->name }}
                        @else
                            Unknown
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info btn-sm me-2">Show</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
