<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    {!! SEO::generate() !!}

    <!-- Google tag (gtag.js) -->
    @if (app()->environment('production'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T1VBQ8CH62"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-T1VBQ8CH62');
        </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16795646074"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-16795646074');
        </script>

        <script>
            function gtag_report_conversion(url) {
                var callback = function() {
                    if (typeof(url) != 'undefined') {
                        window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-16795646074/nLxECK2T3u4ZEPrw5Mg-',
                    'value': 2800,
                    'currency': 'CZK',
                    'event_callback': callback
                });
                return false;
            }
        </script>
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />

    {{-- Main content --}}
    {{ $slot }}

    <x-footer />
</body>

</html>
