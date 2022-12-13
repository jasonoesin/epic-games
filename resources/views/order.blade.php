<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('epic_games.ico') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    </style>

</head>

<body class="antialiased flex justify-center">

<div class="max-w-[1920px] w-[100vw] px-[16rem]">

    <div class="grid grid-cols-[80%_20%]">
        <div class=""></div>
        <div class="bg-[#f2f2f2] h-[100vh] w-[20rem] px-4 py-8">
            <div class="font-semibold">Order Summary</div>
            <div class="">
                <div class="flex gap-2 py-4 rounded-xl text-[0.9rem] items-center">
                    <img class="w-[8rem] h-[10rem] object-cover rounded"
                         src="https://cdn2.unrealengine.com/egs-midnight-suns-carousel-mobile-thumb-1200x1600-9023f577c144.jpg?h=480&resize=1&w=360" alt="">
                    <div class="text-ellipsis-2">Marvel's Midnight Suns</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
