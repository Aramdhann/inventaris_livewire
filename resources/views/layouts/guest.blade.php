<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resouces/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
