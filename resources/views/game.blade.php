@extends('view-template')
@section('content')

    <div class="content">
        <div class="px-[12rem] pb-[8rem]">
            <h1 class="text-[3rem] mb-1">{{$game->name}}</h1>
            <div class="!BANNER mb-8 grid grid-cols-[70%_30%]">
{{--                <img class="rounded-xl" src="https://cdn2.unrealengine.com/egs-callisto-protocol-carousel-desktop-1248x702-d7e27f0eb16a.jpg?h=1080&resize=1&w=1920" alt="">--}}
                <img class="rounded-xl" src="{{$game->image}}" alt="">
                <div class="relative px-8 box-border">
                    <div class="absolute w-full flex flex-col gap-2">
                        <div class="flex gap-2 items-center text-[0.9rem]">
                            @if($game->discount != 0)
                                <div class="bg-[#0074e4] px-2 py-1 rounded">-{{round($game->discount/$game->price * 100)}}%</div>
                            @endif
                            <p class="{{$game->discount != 0 ? "line-through text-[#646464]" : ""}}">{{"Rp " . number_format($game->price,0,',','.')}}</p>

                            @if($game->discount != 0)
                                @if($game->discount == $game->price)
                                    <p>
                                        Free
                                    </p>
                                @else
                                    <p class="">{{"Rp " . number_format($game->price - $game-> discount,0,',','.')}}</p>
                                @endif
                            @endif
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::user())

                            <form method="post" action="{{url('/order')}}">
                                @csrf
                                <input hidden name="game_id" value="{{$game->id}}">

                                @if(!$bought)
                                    <button type="submit" class="cursor-pointer w-full bg-[#0074e4] text-center py-4 px-2 rounded">Buy Now</button>
                                @else
                                    <button disabled class="cursor-pointer w-full bg-black/40 text-center py-4 px-2 rounded">Game Owned</button>
                                @endif
                            </form>
                            <form method="post">
                                @csrf
                                <input hidden name="game_id" value="{{$game->id}}">

                                @if(!$wishlisted)
                                <button type="submit" class="cursor-pointer w-full border border-gray-400 text-center py-2 px-2 rounded text-[0.8rem]">ADD TO WISHLIST</button>
                                @else
                                <button type="submit" class="cursor-pointer w-full border border-gray-400 text-center py-2 px-2 rounded text-[0.8rem]">REMOVE FROM WISHLIST</button>
                                @endif
                            </form>
                        @endif

                        <div class="flex justify-between text-[0.8rem] border-b border-b-[#2a2a2a] py-2 font-bold">
                            <div class="text-gray-400">Refund Type</div>
                            <div class="">Self-Refundable</div>
                        </div>

                        <div class="flex justify-between text-[0.8rem] border-b border-b-[#2a2a2a] py-2 font-bold">
                            <div class="text-gray-400">Developer</div>
                            <div class="">{{$game->developer}}</div>
                        </div>

                        <div class="flex justify-between text-[0.8rem] border-b border-b-[#2a2a2a] py-2 font-bold">
                            <div class="text-gray-400">Publisher</div>
                            <div class="">{{$game->publisher}}</div>
                        </div>

                        <div class="flex justify-between text-[0.8rem] border-b border-b-[#2a2a2a] py-2 font-bold">
                            <div class="text-gray-400">Release Date</div>
                            <div class="">{{ date("d M Y", strtotime($game->release))}}</div>
                        </div>

                        <div class="flex justify-between text-[0.8rem] border-b border-b-[#2a2a2a] py-2 font-bold">
                            <div class="text-gray-400">Platform</div>
                            <div class="">{{$game->platform}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="!DESCRIPTION w-[70%] flex flex-col gap-8">

                <div class="grid-cols-2 grid">
                    <div class="px-4 border-l border-l-[#2a2a2a] text-[rgb(255,255,255)]/60 min-h-[5rem]">
                        <div class="">Genres</div>
                        <div class="genre-details">
                            @foreach($genres as $item)

                                @php
                                    $url = strtolower($item);
                                @endphp

                                @if($loop->last)
                                    <a href="{{url("./genre/$url")}}" class="underline text-white">{{$item}}</a>
                                @else
                                    <a href="{{url("./genre/$url")}}" class="underline text-white">{{$item}},</a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="px-4 border-l border-l-[#2a2a2a] text-[rgb(255,255,255)]/60 min-h-[5rem]">
                        <div class="">Features</div>
                        <div class="genre-details flex">
                            @foreach($features as $feature)
                                @php
                                    $url = strtolower($feature->name);
                                @endphp

                                @if($loop->last)
                                    <a class="underline text-white">{{$feature->name}}</a>
                                @else
                                    <a class="underline text-white">{{$feature->name}},</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="">Description</div>
                <div class="text-[rgb(255,255,255)]/60">
{{--                    Survive to escape the horrors of Callisto. Using a unique blend of shooting and close-quarters combat, players will need to combat rapidly evolving creatures while scavenging to unlock new weapons and gear to outrun the growing threat of Jupiter's Dead Moon.--}}

                    {{$game->description}}
                </div>
                <div class="">Specifications</div>
                <div class="bg-[#202020] font-bold text-[0.9rem] p-16 flex flex-col gap-8">
                    <div class="border-b border-b-[rgb(255,255,255)]/20 pb-8">WINDOWS</div>
                    <div class="text-[rgb(255,255,255)]/60">Minimum</div>

                    <div class="">
                        <div class="text-[rgb(255,255,255)]/60">OS</div>
                        <div class="">{{$game->os}}</div>
{{--                        <div class="">Windows 10</div>--}}
                    </div>

                    <div class="">
                        <div class="text-[rgb(255,255,255)]/60">Processor</div>
                        <div class="">{{$game->cpu}}</div>
{{--                        <div class="">Intel Core i5-7500</div>--}}
                    </div>

                    <div class="">
                        <div class="text-[rgb(255,255,255)]/60">Memory</div>
                        <div class="">{{$game->memory}}</div>
{{--                        <div class="">8 GB</div>--}}
                    </div>

                    <div class="">
                        <div class="text-[rgb(255,255,255)]/60">Direct X</div>
                        <div class="">{{$game->directx}}</div>
{{--                        <div class="">DirectX 11</div>--}}
                    </div>

                    <div class="">
                        <div class="text-[rgb(255,255,255)]/60">Graphics</div>
                        <div class="">{{$game->gpu}}</div>
{{--                        <div class="">AMD NAVI (RX 5500)</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
