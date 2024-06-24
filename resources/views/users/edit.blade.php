@extends('layout')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table class="table">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}"></td>
            </tr>
            <tr>
                <th>Password (leave blank to keep current password):</th>
                <td><input type="password" name="password" id="password" class="form-control" value="{{ $user->password }}"></td>
            </tr>
            <tr>
                <th>Image:</th>
                <td>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($user->image)
                        <p><strong>Current Image:</strong> <img src="{{ asset($user->image) }}" width="100"></p>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td><input type="date" name="dob" id="dob" class="form-control" value="{{ $user->dob }}"></td>
            </tr>
            <tr>
                <th>Active:</th>
                <td>
                    <select name="active" required class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </td>
            </tr>
            {{-- <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        var output = document.getElementById('image-preview');
                        output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script> --}}
        </table>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
        
    </form>
@endsection
