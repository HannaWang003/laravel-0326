<html>

<head>
    <title>Page - @yield('title')</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'
        integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=='
        crossorigin='anonymous'></script>
</head>

<body>
    <div style="min-height:100vh">
        <div class="container sticky-top">
            <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Animal</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('animals.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cats.index') }}">cat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dogs.index') }}">dog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('fish.index') }}">fish</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mt-3">
            <h1>@yield('content-title')</h1>
            @yield('content')
        </div>
    </div>
    <div class="container sticky-bottom">
        <footer class="text-center bg-black text-light p-3 ">&copy;2024-03-laravel</footer>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'
        integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=='
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js'
        integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=='
        crossorigin='anonymous'></script>
</body>

</html>
