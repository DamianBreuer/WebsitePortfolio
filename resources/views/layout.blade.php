<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Damian Breuer</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/myprofile">Profile</a></li>
        <li><a href="/articles">Blog</a></li>
        <li><a href="/faqs">FAQ</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li>
            @if (auth()->user())
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{route('login')}}">Login</a>
            @endif
        </li>
        <li style="float:right"><a href="/contact">Contact</a></li>
    </ul>
    <div class="sidebar">
        <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">HZ Onderwijs en Examenregelingen</a>
        <a href="https://learn.hz.nl/my/" target="_blank">HZ Learn</a>
        <a href="https://www.microsoft.com/nl-nl/microsoft-teams/log-in" target="_blank">Teams</a>
        <a href="https://portal.hz.nl/" target="_blank">HZ Portal</a>
        <a href="https://github.com/" target="_blank">Github</a>
    </div>
</nav>
@yield('content')
</body>
</html>
