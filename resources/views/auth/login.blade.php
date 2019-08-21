@extends('layouts.app')

@section('content')
    <div class="card">
        <h1 class="card__header">Login</h1>
        <form class="card__form" autocomplete="off" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card__formitem @error('email') is-invalid @enderror">
                <i class="material-icons">
                    email
                </i>
                <input type="email" placeholder="E-Mail Address" value="{{ old('email') }}" name="email" />
            </div>
            @if ($errors->has('email'))
            <div class="error-div">
                <p class="error"> {{ $errors->first('email') }}</p>
            </div>
            @endif

            <div class="card__formitem @error('password') is-invalid @enderror">
                <i class="material-icons">
                    lock
                </i>
                <input type="password" placeholder="Password" name="password" id="pwd"/>
                <i class="material-icons" id="pwdtoggle"> visibility</i>
            </div>
            @if ($errors->has('password'))
            <div class="error-div">
                <p class="error"> {{ $errors->first('password') }}</p>
            </div>
            @endif
            <div class="card__formitem--checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <p>Remember me</p>
            </div>
            <div class="card__formaction">
                <button type="submit">Login</button>
            </div>
            @if (Route::has('password.request'))
            <div class="forgot__password">
            <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
            </div>
                                
            @endif
        </form>
       
        <div class="card__formaction--login">
            <a href="{{route('register')}}" class="card__formaction--text">Don't have an account?<span
                    class="card__formaction--link">Register</span></a>
        </div>
    </div>
@endsection

