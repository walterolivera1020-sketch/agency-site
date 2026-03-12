<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="antialiased">
    @yield('content')

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>