<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        {{-- Bootstrap CSS --}}
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        {{-- Bootstrap icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        {{-- CSS --}}
        <link rel="stylesheet" href="/css/style.css">
        
    </head>

    <body>

        {{-- Navbar --}}
        @include('partials.navbar')
        {{-- End of Navbar --}}

        {{-- Content --}}

        <div class="container mt-4">
            @yield('container')
        </div>

        {{-- End of Content --}}


        {{-- jQuery and Bootstrap JS --}}
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>

    </body>

</html>