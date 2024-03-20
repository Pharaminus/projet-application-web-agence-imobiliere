@extends('base')

@section('title', 'Register')

@section('contenu')

    <div class="container">
        <div class="row">
            {{-- <div class="col-md-6 mx-auto"> --}}
                <div class="col-6 mx-auto mt-5"
                    style="background-color: rgba(64, 74, 68, 0.292); border-radius:10px; border:1px solid rgb(177, 175, 175)">

                    <h1 class="text-center text-muted mb-5 mt-3">Register</h1>
                    <p class="text-center text-muted mb-5">Create an account if you don't have one.</p>

                    <form class="row g-3" action="{{ route('register') }}" method="POST" id="form-register">
                        @csrf

                        <div class="col-md-6">
                            <label for="firstname" class="form-label">first name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            <small id="error-register-firstname" class="text-danger fw-bold"></small>
                        </div>

                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Last name</label>
                            <input id="lastname" type="text" name="lastname" id="lastname" class="form-control"
                                value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            <small id="error-register-lastname" class="text-danger fw-bold"></small>

                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">email</label>
                            <input  type="email" name="email" id="email"
                                class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <small id="error-register-email" class="text-danger fw-bold"></small>

                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password"
                                class="form-control" value="{{ old('password') }}" required autocomplete="password"
                                autofocus>
                            <small id="error-register-password" class="text-danger fw-bold"></small>

                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm" class="form-label">Password confirmation</label>
                            <input  type="password" name="password-confirm"
                                id="password-confirm" class="form-control" value="{{ old('password-confirm') }}" required
                                autocomplete="password-confirm" autofocus>
                            <small id="error-register-password-confirm" class="text-danger fw-bold"></small>

                        </div>
                        <div class="col-md-12">
                            <div class="from-check">
                                <input type="checkbox" class="form-check-input" id="agreeterms"></input>
                                <label for="agreeterms" class="form-check-label">Agree terms</label><br>
                                <small id="error-register-agreeterms" class="text-danger fw-bold"></small>

                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button" id="register-user">Register</button>
                        </div>
                        <p class="text-center text-muted mt-5">
                            Alredy have an account ? <a href="{{ route('login') }}">Login </a>
                        </p>
                    </form>
                </div>
            {{-- </div> --}}
        </div>
    </div>


@endsection
