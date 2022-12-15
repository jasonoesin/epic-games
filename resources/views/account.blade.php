@extends('view-template')

@section('title', 'Account')

<style>
    input[type=date]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }
</style>

@section('content')
    <div class="px-[12rem] pb-16">
        <div class="grid grid-cols-[20%_80%] gap-4">
            <div class="border border-white/10 px-4 py-2 relative h-[3rem] flex items-center rounded-sm">
                <div class="absolute h-full w-1 bg-blue-500 left-0 top-0"></div>
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    Account Settings
                </div>
            </div>
            <form method="post" class="border border-white/10 px-8 py-4 flex flex-col gap-8 rounded-sm pb-8">
                @csrf
                <div class="">
                    <div class="font-bold text-[1.5rem]">
                        ACCOUNT SETTINGS
                    </div>
                    <div class="text-[0.9rem]">
                        Manage your account’s details.
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="">
                        <div class="font-bold text-[1.5rem]">
                            ACCOUNT INFORMATION
                        </div>
                        <div class="text-[0.9rem]">
                            Manage your account’s details.
                        </div>
                    </div>

                    <div class="w-[22.5rem]">
                        <input value="{{$user->email}}" name="email" class="text-white/50 rounded outline-none bg-[#131313] border border-white/30 px-4 py-2 w-full" disabled type="email" placeholder="Email Address *">
                    </div>

                    <div class="w-[22.5rem]">
                        <input name="dob" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-2 w-full" type="date" value={{$user->dob}} >
                    </div>

                    <div class="w-[22.5rem]">
                        <input name="name" value="{{$user->name}}" class="placeholder-white/60 rounded outline-none bg-[#202020] border border-white/30 px-4 py-2 w-full" type="text" placeholder="Name *">
                    </div>

                    <div class="relative w-fit">
                        <select name="country_id" class="cursor-pointer bg-[#202020] border border-white/30 px-4 py-2 w-[22.5rem] rounded outline-none appearance-none">
                            @php
                                $value = 1
                            @endphp
                            @foreach($countries as $item)
                                @if($user->country_id == $value)
                                    <option selected value="{{$value++}}">{{$item->name}}</option>
                                @else
                                    <option value="{{$value++}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="cursor-pointer w-6 h-6 absolute top-3 right-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>

                    <button type="submit" class="mt-4 cursor-pointer w-[15rem] bg-[#0074e4] text-center py-3 px-2 rounded">SAVE CHANGES</button>

                </div>
            </form>
        </div>
    </div>
@endsection
