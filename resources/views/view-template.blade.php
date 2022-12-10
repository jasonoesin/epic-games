<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <style>

        body{
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .sticky .navs{
            font-family: Inter,sans-serif;
            background-color: #121212;
            color: #646464;
            font-size: 0.9rem;
        }
    </style>

</head>
<body class="antialiased  flex justify-center">

<div class="max-w-[1920px]">
    @include('header')

    <section class="">
        <div class="sticky top-0 z-[5]">
            <div class="navs flex py-8 items-center gap-8 px-[12rem]">

                <div class="flex bg-[#202020] px-4 py-2 w-[16rem] rounded-3xl gap-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <label>
                        <input class="bg-[#202020] placeholder-white/60 text-white focus:outline-none" placeholder="Search Store">
                    </label>
                </div>
                <a href="{{url('/')}}" class="active_d">Discover</a>
                <a href="{{url('/genre')}}" class="active_b">Browse</a>
            </div>
        </div>

        @yield('content')
    </section>

    @include('footer')

</div>
</body>
</html>
