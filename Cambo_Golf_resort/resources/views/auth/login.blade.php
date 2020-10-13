@extends('layouts.app')

@section('content')
<section class="wpm_title_ber">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Log In</h2>

                <div class="ber_link text-center">

                    <p> <i class="fa fa-angle-double-right"></i> <a href="index.html">Home</a> / <a
                            href="contact.html">Log In</a> <i class="fa fa-angle-double-left"></i> </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="wpm_contact_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="">
                    <h3 class="">{{ __('Login') }}
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="input input--nao">
                        <input class="input__field input__field--nao @error('email') is-invalid @enderror" id="email"
                            type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="input__label input__label--nao" for="input-1">
                            <span class="input__label-content input__label-content--nao">Email</span>
                        </label>

                    </span>


                    <span class="input input--nao">
                        <input class="input__field input__field--nao @error('password') is-invalid @enderror"
                            id="password" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label class="input__label input__label--nao" for="input-1">
                            <span class="input__label-content input__label-content--nao">Password</span>
                        </label>
                    </span>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="wpm_sub_btn">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
