@extends('layouts.app')
{{-- @section('content')

<div id="sidebar">
    <section class="section-1">
        <div class="header">
            <div class="profile-img-box">
                <img src="./img/profile.jpg" alt="">
            </div>
            <h1>{{Auth::user()->name}}</h1>
</div>
<div class="job-description">
    <p>UI/UX Developer</p>
</div>
<div class="social-media">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
</div>
</section>

</div>
<div id="main">
    <div class="hero">
        <div class="hero-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque sunt beatae tempore eaque
                delectus et aliquid.</p>
        </div>
        <div class="main_stats">
            <a href="#">
                <span>Posts</span>
                <span>120</span>
            </a>
            <a href="#">
                <span>Following</span>
                <span>120</span>
            </a>
            <a href="#">
                <span>Followers</span>
                <span>120</span>
            </a>
        </div>
    </div>
</div>
<div id="sidebar">
    {{-- <div class="section-1">

    </div> --}}
    {{-- @foreach ($userlist as $user)
    <div class="friend-list">
        <p>{{$user->name}}</p>
    <p>Javascript Developer</p>
    <a href="" class="follow">Follow</a>
</div>
@endforeach --}}

{{-- <div class="friend-list">
            <p>Will Johnson</p>
            <p>iOS Developer</p>
            <a href="" class="follow">Follow</a>
        </div> --}}
{{--</div>

@endsection --}}

{{-- NEW --}}
@section('content')
<section class="intro-section">
    <div class="header">
        <div class="profile-img-box">
            <img src="./img/profile.jpg" alt="">
        </div>
        <h1>{{Auth::user()->name}}</h1>
    </div>
    <div class="job-description">
        <p>UI/UX Developer</p>
    </div>
    <div class="social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
    </div>
</section>
<section class="hero">
    <div class="hero-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloremque sunt beatae tempore eaque
            delectus et aliquid.</p>
    </div>
    <div class="main_stats">
        <a href="#">
            <span>Posts</span>
            <span>120</span>
        </a>
        <a href="#">
            <span>Following</span>
            <span>120</span>
        </a>
        <a href="#">
            <span>Followers</span>
            <span>120</span>
        </a>
    </div>

</section>
<section class="news">
    NEWS
</section>
<section class="side-nav">
    SIDE NAV
</section>
<section class="main-section">
    MAIN SECTION
</section>
<section class="friend-list">
    @foreach ($userlist as $user)
    <div class="friend-list-item">
        <p>{{$user->name}}</p>
        <p>Javascript Developer</p>
        <a href="" class="follow">Follow</a>
    </div>
    @endforeach
</section>

@endsection
