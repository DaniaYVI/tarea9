<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-white navbar-light">
        <span>Mi Panel</span>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link">
            <span class="brand-text">Menus</span>
        </a>

        <div class="sidebar">
            <nav>
                <ul class="nav nav-pills nav-sidebar flex-column">

                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            <p>Home</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/photos" class="nav-link {{ request()->is('photos') ? 'active' : '' }}">
                            <p>Photos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                            <p>Contact</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Realizado por: Dania Valenzuela</strong>
    </footer>

</div>

<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>