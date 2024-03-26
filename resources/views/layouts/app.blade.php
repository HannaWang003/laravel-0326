<html>

<head>
    <title>Page - @yield('title')</title>
</head>

<body>
    <div class="container">
        <nav>
            <li>Home</li>
            <li>cat</li>
            <li>dog</li>
            <li>contact</li>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
