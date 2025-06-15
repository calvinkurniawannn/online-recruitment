@extends('main.main')

@section('content')
    <div class="container mt-5">
        <h2>Sign Up</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            {{-- Optional role selection (or you can hide this if you want role = 0 by default) --}}
            <input type="text" name="role" value="0">

            {{-- Hidden system fields --}}
            <input type="hidden" name="created_by" value="system">
            <input type="hidden" name="modified_by" value="system">

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
