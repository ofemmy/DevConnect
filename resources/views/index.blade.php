@extends('layouts.app')
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
    <ul>
        <li><a href="#">New Post</a></li>
        <li><a href="#">My Networks</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">My Posts</a></li>
    </ul>
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
