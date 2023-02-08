<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style css -->
    @include('components.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('components.navigation')
            </nav>
            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                @include('components.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar </a> & Design Blade By <a href="https://mamanbbc.vercel.app/"> Maman </a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- JS -->
    @include('components.script')
</body>

</html>
