<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body{
            background-color: #121212;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>
<body CLASS="antialiased flex justify-center items-center h-[100vh]">
    <div class="max-w-[1920px] max-h-[1080px]">
        <div class="text-white">
            <form method="post" action="" class="w-[30rem] bg-[#202020] gap-[1.5rem] rounded px-4 py-16 flex flex-col items-center">
                @csrf
                <div title="Epic Games, Public domain, via Wikimedia Commons" ><img width="64" class="" alt="Epic Games logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Epic_Games_logo.svg/512px-Epic_Games_logo.svg.png"></div>
                <div class="text-[1.25rem]">
                    Sign In with an Epic Games Account
                </div>
                <div class="w-[22.5rem]">
                    <input name="email" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="text" placeholder="Email Address">
                </div>

                <div class="w-[22.5rem]">
                    <input name="password" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="password" placeholder="Password">
                </div>




                <div class="text-white flex flex-col">
                    @if($errors)
                        @forelse($errors->all() as $error)
                            <div class="">
                              {{$error}}
                            </div>
                        @empty
                        @endforelse
                    @endif
                </div>




                <button type="submit" class="bg-[#0074e4] w-[22.5rem] px-8 py-4 rounded text-center">
                    LOG IN NOW
                </button>

                <div class="flex gap-1">
                    <div class="text-white/70">Don't have an Epic Games Account?</div>
                    <a href="{{url('/register')}}" class="underline">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
