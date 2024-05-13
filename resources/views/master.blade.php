<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet" />
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>UKost</title>
    <link rel="icon" href="{{ asset('assets/logoIcon.png') }}" type="image/x-icon">
    <style>
        .swiper-pagination-bullet {
            background-color: white;
        }
    </style>
</head>

<body class="font-poppins">
    @if (Request::is('product'))
        @include('layouts.navigation.navbarproduct')
    @else
        @include('layouts.navigation.navbar')
    @endif
    <main @if(!Request::is('product')) @else class="md:mt-24" @endif>
        @yield('homepage')
        @yield('product')
    </main>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('script/product.js') }}"></script>
</body>
</html>
