<nav class="navbar">
    <div class="navbar__logo">
        <h2>
            <a href="{{ url('/') }}">
             {{ config('app.name', 'DevConnect') }}
            
            </a>
        </h2>
    </div>
    <ul class="navbar__links">
        @auth
        <li class="navbar__item"><a href="/">Home</a></li>
        <li class="navbar__item"><a href="#">About Me</a></li>
        <li class="navbar__item"><a href="#">Profile</a></li>
        <li class="username">{{ Auth::user()->name }}</li>

        <li><a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="navbar__actions-hidden">
            {{ csrf_field() }}
        </form>
        @else
        <li class="navbar__item"><a class="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
        <li class="navbar__item"><a class="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
        @endauth
    </ul>
</nav>
