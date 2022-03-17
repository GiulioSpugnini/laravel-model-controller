<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Movie')</title>
    <link rel="stylesheet" href="{{ asset('app.scss') }}">
</head>

<body>
    <header>
        <a>Home</a>
    </header>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
