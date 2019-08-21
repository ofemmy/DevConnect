<nav class="navbar">
    <div class="navbar__logo">

        <a href="{{ url('/') }}">
            <img src="/img/logo.png" alt="">

        </a>

    </div>

    <div class="navbar__links">
        @auth
        <a class="navbar__item" href="/">Home</a>
        <a class="navbar__item" href="#">About Me</a>
        <a class="navbar__item" href="#">Profile</a>
        <div class="username">
            <p> {{ Auth::user()->name }}</p>
            <i class="material-icons">arrow_drop_down</i>

            <div class="dropdown">
                <div class="logout">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <i class="material-icons" style="color:orangered">exit_to_app</i>
                </div>

            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="navbar__actions-hidden">
            {{ csrf_field() }}
        </form>
        @else
        <a class="navbar__item" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
        <a class="navbar__item" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        @endauth
    </div>
</nav>
