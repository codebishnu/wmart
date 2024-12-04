@extends('layouts.app')

@section('content')


<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
    <div class="box">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <!-- <input type="hidden" name="_token"> -->
            <div class="login-title">
                <h2>Register</h2>
            </div>

            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" class="block mt-1 w-full  @error('name') is-invalid @enderror" type="text" name="name"
                    value="{{old('name')}}" autofocus="" autocomplete="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input">
                <label for="mobile">Phone</label>
                <input type="text" id="mobile" class="block mt-1 w-full  @error('mobile') is-invalid @enderror" type="text" name="mobile"
                    value="{{old('mobile')}}"  autofocus="" autocomplete="mobile">
                @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input">
                <label for="emailname">Email Address</label>
                <input type="email" id="emailname" class="block mt-1 w-full  @error('email') is-invalid @enderror" type="email" name="email"
                    value="{{old('email')}}"  autocomplete="username">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input">
                <label for="pass">Password</label>
                <input type="password" id="pass" class="block mt-1 w-full  @error('password') is-invalid @enderror" name="password" 
                    autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input">
                <label for="compass">Confirm Password</label>
                <input type="password" id="compass" class="block mt-1 w-full  @error('password') is-invalid @enderror" name="password_confirmation"
                     autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="button login">
                <button type="submit">
                    <span>Sign Up</span>
                    <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <p><a href="{{route('login')}}" class="theme-color">Already have an account?</a></p>
</div>
</div>

<!-- Sign Up Section End -->




<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection