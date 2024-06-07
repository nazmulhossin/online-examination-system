<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') SmartExam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    @stack('style')
</head>
<body>
    <header>
        <div class="site-logo"><a href="">SmartExam</a></div>

        <nav>
            <ul>
                <li class="active"><a href="">Home</a></li>
                <li><a href="">Practice</a></li>
                <li><a href="">Exam</a></li>
                <li><a href="">Create Exam</a></li>
            </ul>
        </nav>

        <div class="user-profile">
            <img src="{{asset('img/profile-avater.png')}}" alt="profile picture">
            <div id="dropdown-menu">
                <div class="user-info">
                    <img src="{{asset('img/profile-avater.png')}}" alt="profile picture">
                    <div><p>Md. Nazmul Hossain</p><p>nazmul_hossain</p></div></div>
                <div class="profile-link">My Profile</div>
                <div class="theme">
                    <p>Theme</p>
                    <ul>
                        <li class="active-theme"><span class="bullet"><span></span></span> Light</li>
                        <li><span class="bullet"><span></span></span> Dark</li>
                        <li><span class="bullet"><span></span></span> Blue</li>
                    </ul>
                </div>
                <div class="logout-button"><button>Logout <i class="fa-solid fa-right-from-bracket"></i></button></div>
            </div>
        </div>
    </header>

    <main>@yield('main_content')</main>

    <footer>
        Copyright © 2024 - {{date('Y')}} by <pre> SmartExam</pre>. All rights reserved.
    </footer>
    <script src="js/app.js"></script>
</body>
</html>