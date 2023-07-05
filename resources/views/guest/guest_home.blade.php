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

    <style>
        .jumb_image {
            background-image: url("/images/photo-1635830625698-3b9bd74671ca.avif");
        }

        .bio_image {
            background-image: url("/images/IMG_20210314_104826.jpg");
        }

    </style>
</head>
<body x-data="{show: false}">
    <div id="home-page">
        @include('partials.navbar')
        <main>
            @include('partials.jumbotron')
            @include('partials.biograpy')
            @include('partials.competenze')
            @include('partials.miei_lavori')
            @include('partials.cvitae')
            @include('partials.seguimi')
            @include('partials.footer')
            @include('partials.up-arrow')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
