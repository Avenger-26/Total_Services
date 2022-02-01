<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (Route::currentRouteName() == 'login')
        <title>Total Services | Login Page</title>
    @elseif(Route::currentRouteName() == 'register') <title>Total Services | Registration Page</title>
    @endif
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>
