<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav>
        <div class="nav-wrapper cyan darken-4">
            <a href="/" class="brand-logo">LaraCourses</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>

                @if (Auth::guest())
                    <li><a href="{{ route('site.login') }}">Login</a></li>
                @else
                    <li><a href="{{ route('admin.courses') }}">Courses</a></li>
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('site.login.exit') }}">Logout</a></li>
                @endif

            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('admin.courses') }}">Courses</a></li>
    </ul>
