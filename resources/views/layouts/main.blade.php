<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('css')
        <link rel="stylesheet" href="../css/global.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <title>@yield('title')</title>
        <script src="../js/alert.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <header>
            <section class="navbar">
                <nav>
                    <a href="/">Inicio</a>
                </nav>

                <nav>
                    <a href="#">Sobre</a>
                </nav>
            </section>
        </header>

        @yield('content')

        <footer class="footer">Copyright &copy; 2023</footer>

        @if (session('msg'))
            <script>
                setAlert("{{ session('msg') }}")
            </script>
        @endif
    </body>
</html>
