<link rel="stylesheet" href="{{ asset('css/layout/header-admin.css') }}">
<nav class="nav-wrapper">
    <div class="left-nav">
        <h1>JOB BOARD</h1>
    </div>
    <div class="right-nav">
        <ul>
            <li>
                <a href="{{ route('view.landingpage') }}">Hello slamat datang{{ Auth::user()->name }}</a>
            </li>
            <li>
                <a href="{{ route('post.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
