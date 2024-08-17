@extends('layouts.admin')

@section('title', 'Blog Post Details')

@section('content')
<div class="card">
    <div class="card-header">
        Blog Post Details
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text"><strong>ID:</strong> {{ $post->id }}</p>
        <p class="card-text"><strong>Author:</strong> @if ($post->user){{ $post->user->name }} @else Unknown @endif</p>
        <p class="card-text"><strong>Content:</strong> {{ $post->content }}</p>
        <p class="card-text"><strong>Created At:</strong> {{ $post->created_at->format('d M Y, H:i') }}</p>
        <p class="card-text"><strong>Updated At:</strong> {{ $post->updated_at->format('d M Y, H:i') }}</p>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
    </div>
</div>
@endsection
