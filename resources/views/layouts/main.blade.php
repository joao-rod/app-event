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
                @auth
                    <nav>
                        <a href="/dashboard">Início</a>
                    </nav>

                    <nav>
                        <form action="/logout" method="POST">
                            @csrf
                            <a
                                href="/logout"
                                onclick="event.preventDefault()
                                this.closest('form').submit();"
                            >Sair</a>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav>
                        <a href="/login">Login</a>
                    </nav>

                    <nav>
                        <a href="/register">Registrar</a>
                    </nav>
                @endguest

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
