<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {!! SEO::generate() !!}

        <!-- Google tag (gtag.js) -->
        @if(app()->environment('production'))
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-H0P53L48G1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-H0P53L48G1');
            </script>

            <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16795646074"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'AW-16795646074');
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
