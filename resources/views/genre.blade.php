@extends('view-template')
@section('title',"Genre")
@section('content')

    <style>
        .active_b{
            color: rgb(245, 245, 245);
        }
    </style>

    <div class="content">
        <div class="px-[12rem] pb-[8rem]">
            <div class="!GENRE  px-8 py-4 rounded mb-8">
                <div class="free-top py-4 text-[1.5rem]">Popular Genres</div>

                <div class="grid grid-cols-4 gap-4 gap-y-8">
                    @foreach($genres as $item)
                        @php
                            $url = strtolower($item->name);
                        @endphp

                    <a href="{{url("./genre/$url")}}" class="item bg-[#1f1f1f] cursor-pointer hover:bg-[#2a2a2a] p-4 rounded relative justify-center flex flex-col items-center">
                        <div class="grid grid-cols-[40%_40%_40%] relative">
                            @if(isset($item->games[0]))
                            <img
                                class="w-full h-[10rem] object-cover rounded relative z-[1]"
                                src="{{$item->games[0]->image}}" alt="">
                            @endif
                            @if(isset($item->games[1]))
                            <img
                                class="w-[50%] h-[10rem] object-cover absolute z-[2] left-[25%] drop-shadow-[0_0_40px_rgba(0,0,0,1)]"
                                src="{{$item->games[1]->image}}" alt="">
                            @endif
                            @if(isset($item->games[2]))
                            <img
                                class="w-[50%] h-[10rem] object-cover rounded absolute z-[1] left-[50%]"
                                src="{{$item->games[2]->image}}" alt="">
                            @endif
                        </div>

                        <div class="mt-4 text-center text-[1.2rem]">
                            <p>{{$item->name}} Games</p>
                        </div>
                    </a>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
