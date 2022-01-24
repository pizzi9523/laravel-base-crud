<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - DC COMICS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Script  -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>


<body class="d-flex">
    <aside class="">
        <div class="sidenav d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="#" class="d-flex link-dark text-decoration-none justify-content-center">
                <div class="fs-4">
                    <img src="../img/dc-logo.png" alt="">
                </div>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link link-dark" aria-current="page">

                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}" class="nav-link link-dark">
                        <i class="fas fa-tachometer-alt"></i>

                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comics') }}" class="nav-link link-dark">
                        <i class="fas fa-book-open"></i>
                        Comics
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.index') }}" class="nav-link link-dark">
                        <i class="far fa-newspaper"></i>
                        Posts
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-gamepad"></i>
                        Games
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>ADMIN</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </aside>



    <main id="site_main" class="admin_main flex-grow-1">
        @yield('admin_content')
    </main>



</body>

</html>
