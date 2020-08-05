<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.jpeg') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @stack('styles')
</head>

</head>
<body>

    <main class="w-full h-full">
        <h1>rorepoid</h1>
        @yield('content')
    </main>

    @stack('scripts')

</body>
</html>
