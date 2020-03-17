<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Casa da Pizza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        {{-- conteudo aparece aqui --}}
        @yield('content')
        <footer>
            Copyright &copy; 2020 Casa da Pizza
        </footer>
    </body>
</html>
