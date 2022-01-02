<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{config('app.url')}}" />
    <meta name="application-name" content="{{config('app.name')}}">
    <meta name="theme-color" content="#4285f4">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    @bukStyles
    @hasanyrole('teleoperator|operator|admin|apto')
    @powerGridStyles
    @endhasanyrole
    @hasSection('title')
    <title>MetropolyTAN - @yield('title')</title>
    @else
    <title>MetropolyTAN</title>
    @endif
    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('service-worker.js').then(function (registration) {
                // Registration was successful
                console.log('[service-workers]: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('[service-workers]: ServiceWorker registration failed: ', err);
            });
        }
    </script>
    @stack('styles')
</head>

<body>
    @yield('content')
</body>
@livewireScripts
@livewire('livewire-ui-modal')
@hasanyrole('teleoperator|operator|admin|apto')
@powerGridScripts
@endhasanyrole
@bukScripts
<script src="{{ asset('js/app.js') }}"></script>
@auth
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    <script>
        const beamsClient = new PusherPushNotifications.Client({
            instanceId: '280dbebe-4910-4697-ad65-25d358a3865e',
        });

        beamsClient.start()
            .then(() => beamsClient.addDeviceInterest('hello'))
            .then(() => console.log('Successfully registered and subscribed!'))
            .catch(console.error);
    </script>
@endauth
@stack('scripts')
</html>
