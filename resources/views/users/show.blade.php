@extends('layout')

@section('content')
    <h1>User Details</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{ $user->dob }}</td>
        </tr>
        @if($user->image)
            <tr>
                <th>Image</th>
                <td><img src="{{ asset($user->image) }}" alt="User Image" width="100"></td>
            </tr>
        @endif
        <tr>
            <th>Active</th>
            <td>{{ $user->active == 1 ? 'Yes' : 'No' }}</td>
        </tr>
    </table>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
@endsection
