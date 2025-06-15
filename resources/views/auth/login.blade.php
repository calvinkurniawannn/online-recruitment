@extends('main.main')

@section('content')
    <div class="container mt-5">
        <h2>Login</h2>

        <form action="{{ route('post.login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
@endsection
