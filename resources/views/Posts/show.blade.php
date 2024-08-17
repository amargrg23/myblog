@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Blog Post Details</h1>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $post->id }}</li>
        <li class="list-group-item"><strong>Title:</strong> {{ $post->title }}</li>
        <li class="list-group-item"><strong>Content:</strong> {{ $post->content }}</li>
    </ul>
</div>
@endsection
