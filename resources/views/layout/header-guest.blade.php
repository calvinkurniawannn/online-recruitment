<link rel="stylesheet" href="{{ asset('css/layout/header-guest.css') }}">
<nav class="nav-wrapper">
    <div class="left-nav">
        <h1>JOB BOARD</h1>
    </div>
    <div class="right-nav">
        <ul>
            <li>
                <a href="{{ route('view.landingpage') }}">Jobs</a>
            </li>
            <li>
                <a href="{{ route('view.signup') }}">Signup</a>
            </li>
            <li>
                <a href="{{ route('view.login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav>
