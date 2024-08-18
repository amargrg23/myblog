@extends('layouts.admin')

@section('title', 'User Details')

@section('content')
    <div class="card">
        <div class="card-header">
            User Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Role:</strong> {{ $user->role ? ucfirst($user->role) : 'Author' }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $user->created_at->format('d M Y, H:i') }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $user->updated_at->format('d M Y, H:i') }}</p>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users</a>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
        </div>
    </div>
@endsection
