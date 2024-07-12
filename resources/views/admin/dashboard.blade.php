@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome To The Admin Dashboard Page</p>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text display-4">{{ $userCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection