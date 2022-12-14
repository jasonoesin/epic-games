<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body{
            background-color: #121212;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        input[type=date]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
    </style>
</head>
<body CLASS="antialiased flex justify-center items-center h-[100vh]">
    <div class="max-w-[1920px]">
        <div class="text-white">
            <form method="post" class="text-white box-border w-[30rem] bg-[#202020] gap-[1.5rem] rounded px-4 py-16 flex flex-col items-center">
                @csrf
                <div title="Epic Games, Public domain, via Wikimedia Commons" ><img width="64" class="" alt="Epic Games logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Epic_Games_logo.svg/512px-Epic_Games_logo.svg.png"></div>
                <div class="text-[1.25rem]">
                    Sign Up with an Epic Games Account
                </div>


                <div class="relative">
                    <select name="country" class="cursor-pointer bg-[#202020] border border-white/30 px-4 py-4 w-[22.5rem] rounded outline-none appearance-none">
                        <option value="0">Select a country:</option>
                        @php
                            $value = 1
                        @endphp
                        @foreach($countries as $item)
                            <option value="{{$value++}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="cursor-pointer w-6 h-6 absolute top-5 right-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>

                <div class="w-[22.5rem]">
                    <input name="date" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="date">
                </div>

                <div class="w-[22.5rem]">
                    <input name="name" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="text" placeholder="Name *">
                </div>

                <div class="w-[22.5rem]">
                    <input name="email" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="email" placeholder="Email Address *">
                </div>

                <div class="w-[22.5rem]">
                    <input name="password" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-4 w-full" type="password" placeholder="Password *">
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
                    REGISTER NOW
                </button>

                <div class="flex gap-1">
                    <div class="text-white/70">Already have an Epic Games Account?</div>
                    <a href="{{url('/login')}}" class="underline">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
