<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">

        <title>
            Giftos
        </title>

        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

        <!-- Custom styles for this template -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

        <!--style css-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

        <link href="{{asset('css/style.scss')}}" rel="stylesheet" />

        <link href="{{asset('css/style.scss/style.css.map')}}" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{--Tailwindcss cdn--}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>
        </div>

        <div class="footer">
            @include('layouts.footer')
        </div>

        <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script src="{{ asset('js/custom.js')}}"></script>
    </body>
</html>
