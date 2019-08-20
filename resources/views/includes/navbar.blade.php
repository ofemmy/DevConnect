{{-- <nav class="navbar">
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
        <li class="username">
        <span> {{ Auth::user()->name }}</span>
        <a href="#" class="triggerdropdown">
        <i class="material-icons">arrow_drop_down</i>
        </a>
        <ul class="dropdown">
        <li><a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}
            </a>
        </li>
        </ul>
       </li>

       

        {{-- <li><a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li> --}}
       {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="navbar__actions-hidden">
            {{ csrf_field() }}
        </form>
        @else
        <li class="navbar__item"><a class="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
        <li class="navbar__item"><a class="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
        @endauth
    </ul>
</nav> --}}




<nav class="navbar">
    <div class="navbar__logo">
        <h2>
            <a href="{{ url('/') }}">
             {{ config('app.name', 'DevConnect') }}
            
            </a>
        </h2>
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
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
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
        <li class="navbar__item"><a class="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
        <li class="navbar__item"><a class="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
        @endauth
    </div>
</nav>
