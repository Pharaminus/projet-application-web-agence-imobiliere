@extends('base')

@section('title', 'login')

@section('contenu')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5" style="background-color: rgba(64, 74, 68, 0.292); border-radius:10px; border:1px solid rgb(177, 175, 175)">

                <div class="col-md-8 mx-auto">
                    <h1 class="text-center text-muted mb-3 mt-5">
                        please sign in
                    </h1>
                    <p class="text-center text-muted mb-5">Your homes are waiting for you. </p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        @error('email')
                            <div class="alert alert-danger text-center" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        @error('password')
                            <div class="alert alert-danger text-center" role="alert">
                                {{ $message }}
                            </div>
                        @enderror


                        <label for="email">email</label>
                        <input type="email" name="email" id="email"
                            class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>

                        <label for="password">password</label>
                        <input type="password" name="password" id="password"
                            class="form-control mb-3 @error('password') is-invalid @enderror" required
                            autocomplete="current-password">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input name="remember" type="checkbox" class="form-check-input" role="switch"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="form-check-label">Remenber me</label>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>


                        <div class="d-grid gap-2">
                            <button type="submit  " class="btn btn-primary">
                                sign in
                            </button>
                        </div>

                        <p class="text-center text-muted mt-5">
                            Not registered yet ? <a href="{{ route('register') }}">Create an anccount </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
