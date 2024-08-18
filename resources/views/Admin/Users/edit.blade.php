@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    
    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <div class="col-md-6">
                <select id="role" class="form-select" name="role" value="{{ old('role', $user->role) }}" required>
                        <option value="admin">Admin</option>
                        <option value="author">Author</option>
                </select>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Enter user's password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection
