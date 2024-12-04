@extends('layouts.app')

@section('content')


<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login-title">
                    <h2>Login</h2>
                </div>
                <div class="input">
                    <label for="email">Email</label>

                    <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{old('email')}}"  autofocus=""
                        autocomplete="email">


                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input">
                    <label for="password">Password</label>

                    <input type="password" id="password" class="block mt-1 w-full @error('password') is-invalid @enderror" name="password" 
                        autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                <div class="button login">
                    <button type="submit">
                        <span>Log In</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p>Not a member? <a href="{{route('register')}}" class="theme-color">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Log In Section End -->

@endsection