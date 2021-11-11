<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{config('url')}}" />
    <meta name="application-name" content="{{config('name')}}">
    <meta name="theme-color" content="#4285f4">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    @hasSection('title')
    <title>MetropolyTAN - @yield('title')</title>
    @else
    <title>MetropolyTAN</title>
    @endif
    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('service-workers.js').then(function (registration) {
                // Registration was successful
                console.log('[service-workers]: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('[service-workers]: ServiceWorker registration failed: ', err);
            });
        }
    </script>
</head>

<body>
    @yield('content')
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>