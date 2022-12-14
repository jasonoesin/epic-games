@extends('view-template')

@section('title', "Owned Games")

@section('content')
        <div class="content">
            <div class="px-[12rem]">
                <div class="!FREE-GAMES py-4 rounded mb-8">
                    <div class="free-top py-4 text-[2rem]">Owned Games</div>

                        @forelse($games as $item)
                        <div class="grid grid-cols-5 gap-4 gap-y-16">
                            <a href="{{url("./game/$item->id")}}" class="item cursor-pointer">
                                <img
                                    class="bg-white hover:opacity-90 w-full h-[22.5rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p class="text-[0.6rem] font-bold text-gray-400">BASE GAME</p>
                                    <p>{{$item->name}}</p>
                                    <div class="item-price flex text-[0.8rem] gap-1 items-center">
                                        @if($item->discount != 0)
                                            <div class="bg-[#0074e4] px-2 py-1 rounded">-{{round($item->discount/$item->price * 100)}}%</div>
                                        @endif
                                        <p class="{{$item->discount != 0 ? "line-through text-[#646464]" : ""}}">{{"Rp " . number_format($item->price,0,',','.')}}</p>

                                        @if($item->discount != 0)
                                            @if($item->discount == $item->price)
                                                <p>
                                                    Free
                                                </p>
                                            @else
                                                <p class="">{{"Rp " . number_format($item->price - $item-> discount,0,',','.')}}</p>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                            <div class="flex flex-col items-center">
                                <div class="text-[2rem]">No games owned</div>
                                <div class="text-[1.25rem] text-white/50">Start buying games !</div>
                            </div>
                        @endforelse
            </div>
        </div>
@endsection
