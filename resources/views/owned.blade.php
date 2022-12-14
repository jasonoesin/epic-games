@extends('view-template')

@section('title', "Owned Games")

@section('content')
        <div class="content">
            <div class="px-[12rem]">
                <div class="!FREE-GAMES py-4 rounded mb-8">
                    <div class="free-top py-4 text-[2rem]">Owned Games</div>


                        <div class="grid grid-cols-5 gap-4 gap-y-16">
                            @forelse($games as $item)
                            <a href="{{url("./game/$item->id")}}" class="item cursor-pointer">
                                <img
                                    class="bg-white hover:opacity-90 w-full h-[22.5rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p class="text-[0.6rem] font-bold text-gray-400">BASE GAME</p>
                                    <p>{{$item->name}}</p>
                                </div>
                            </a>
                            @empty

                            @endforelse
                        </div>

                    @if(!$games)
                        <div class="flex flex-col items-center">
                            <div class="text-[2rem]">No games owned</div>
                            <div class="text-[1.25rem] text-white/50">Start buying games !</div>
                        </div>
                    @endif

            </div>
        </div>
@endsection
