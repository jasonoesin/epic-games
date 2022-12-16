<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
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
        <div class="py-8 pr-4 flex flex-col gap-4">
            <div class="pb-4 border-b relative font-bold">
                <div class="">CHECKOUT</div>
                <div class="absolute bg-blue-300 h-0.5 bottom-0 w-[50%]"></div>
                <div class="absolute right-0 top-0 font-semibold text-blue-600">

                    <div class="flex items-center gap-2 text-[0.9rem]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                        </svg>
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">REVIEW AND PLACE ORDER</div>
            </div>

            <div class="w-full p-8 bg-[#f2f2f2]">
                Verify your information and click Place Order
            </div>
        </div>
        <div class="bg-[#f2f2f2] h-[100vh] w-[20rem] px-4 py-8 relative">
            <div class="font-semibold flex relative">
                <div class="">Order Summary</div>
                <a href="{{url('/')}}" class="absolute right-0 text-black/60">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="">
                <div class="flex gap-2 py-4 rounded-xl text-[0.9rem] items-center">
                    <img class="w-[7rem] h-[10rem] object-cover rounded"
                         src="{{$game->image}}" alt="">
                    <div class="font-bold">{{$game->name}}</div>

                </div>
            </div>

            <div class="grid grid-cols-[60%_40%] text-center text-black/60">
                <div class="text-left">Price</div>
                <div class="text-right">{{"Rp " . number_format($game->price,0,',','.')}}</div>
            </div>

            <div class="grid grid-cols-[60%_40%] text-center text-black/60">
                <div class="text-left">Sale Discount</div>
                <div class="text-right">{{"Rp " . number_format($game->discount,0,',','.')}}</div>
            </div>

            <div class="grid grid-cols-[60%_40%] font-semibold text-black/70">
                <div class="text-left">Total</div>
                <div class="text-right">{{"Rp " . number_format($game->price - $game->discount,0,',','.')}}</div>
            </div>

            <form action="{{url("/order/$game->id")}}" method="post" class="mt-4">
                @csrf
                <label class="flex gap-4">
                    <input name="agree" type="checkbox" class="border w-5 h-5 border-black/40">
                    <span class="text-[0.8rem] text-black/70">
                        I agree with the terms and rules applied on Epic Games.
                    </span>
                </label>



                <div class="absolute bottom-0 w-full px-4 left-0 right-0 text-white p-4 bg-[#f2f2f2] drop-shadow-2xl border-t">

                    @if($errors->all())
                        <div class="flex items-center gap-2 pb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            <div class="text-black flex flex-col text-[0.8rem]">

                                    @forelse($errors->all() as $error)
                                        <div class="">
                                            {{$error}}
                                        </div>
                                    @empty
                                    @endforelse
                            </div>
                        </div>
                    @endif



                    <button type="submit" class="bg-[#0074e4] w-full py-4 rounded">
                        PLACE ORDER
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
