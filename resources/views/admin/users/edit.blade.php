@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
    
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password (leave blank to keep current password)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection