<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/cymer/assets/favicons/apple-touch-icon.') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/cymer/assets/favicons/favicon-32x32.') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/cymer/assets/favicons/favicon-16x16.') }}">
    <link rel="manifest" href="{{ asset('/cymer/assets/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/cymer/assets/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('/cymer/assets/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('/cymer/assets/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#a789d4">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/cymer/assets/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/cymer/assets/css/styles.css') }}">

    <title> Cymer Denampo </title>
</head>

<body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>


    <!-- <script src="assets/js/scrollreveal.min.js"></script> -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('/cymer/assets/js/swiper-bundle.min.js') }}"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="{{ asset('/cymer/assets/js/mixitup.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('/cymer/assets/js/main.js') }}"></script>
</body>

</html>
