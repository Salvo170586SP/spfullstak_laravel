<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    @vite(['resources/scss/app.scss','resources/js/scrollnav.js','resources/js/scrolling.js','resources/js/imgprev.js','resources/js/arrowTop.js','resources/js/app.js'])
    @yield('additional-css')
</head>
<body x-data="{show: false}">
    <div id="home-page">
        @include('guest.partials.navbar')
        <main>
            @yield('contain')
        </main>
    </div>
    @include('guest.partials.footer')
@include('guest.partials.up-arrow')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination"
            , },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next"
                , prevEl: ".swiper-button-prev"
            , },

            // And if we need scrollbar
            scrollbar: {
                el: ".swiper-scrollbar"
            , }
        , });

    </script>
</body>

</html>
