@extends('layouts.app')

@section('content')
    <div class="card">
        <h1 class="card__header">Register</h1>
        <form class="card__form" autocomplete="off" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card__formitem @error('name') is-invalid @enderror">
                <i class="material-icons">
                    account_circle
                </i>
                <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" />
            </div>
            @if ($errors->has('name'))
            <div class="error-div">
                <p class="error"> {{ $errors->first('name') }}</p>
            </div>
            @endif

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
                <input type="password" placeholder="Password" name="password" />
            </div>
            @if ($errors->has('password'))
            <div class="error-div">
                <p class="error"> {{ $errors->first('password') }}</p>
            </div>
            @endif

            <div class="card__formitem @error('password') is-invalid @enderror">
                <i class="material-icons">
                    lock
                </i>
                <input type="password" placeholder=" Confirm Password" name="password_confirmation" />
            </div>
            @if ($errors->has('password'))
            <div class="error-div">
                <p class="error"> {{ $errors->first('password') }}</p>
            </div>
            @endif
            <div class="card__formaction">
                <button type="submit">Register</button>
            </div>
        </form>
        {{-- testing --}}
        <div class="card__formaction--login">
            <a href="#" class="card__formaction--text">Already have an account?<span
                    class="card__formaction--link">Login</span></a>
        </div>
    </div>
@endsection
