@extends('view-template')

@section('title', 'Home')

@section('content')
    <style>
        .active_d{
            color: rgb(245, 245, 245);
        }

        .text-ellipsis-2{
            text-overflow:ellipsis;
            overflow:hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        .text-ellipsis-3{
            text-overflow:ellipsis;
            overflow:hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        #progressBar{
            transition: all;
        }

        .jumbotron-desc{

        }
    </style>

        <div class="content">
            <div class="px-[12rem]">
                <div class="!BANNER mb-8 grid grid-cols-[80%_20%]">
                    <div class="relative jumbotron">
                        <img id="jumbotron-image" class="rounded-xl" src="{{$sliders[0]->image}}" alt="">

                        <div class="absolute bottom-4 left-0 w-[30rem] p-10">
                            <div class="">
                                <div id="jumbotron-desc" class="text-ellipsis-3 mb-8 font-semibold w-[20rem] text-[1rem] drop-shadow-2xl text-white ">
                                    {{$sliders[0]->description}}
                                </div>
                                @php
                                    $id = $sliders[0]->id;
                                    $current_href = url("/game/$id");
                                @endphp
                                <a href="{{$current_href}}" id="jumbotron-detail" class="border bg-white rounded text-black px-12 text-[0.8rem] py-3 drop-shadow-2xl">
                                    DETAIL
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="BANNER-RIGHT px-4 flex flex-col gap-2">
                        @foreach($sliders as $item)
                            @if($loop->first)
                                <a href="{{url("/game/$item->id")}}" class="!BANNER-RIGHT-ITEM rounded-xl text-[0.9rem] items-center relative overflow-clip">

                                    <div id="progressBar" class="h-full absolute bg-[#363636] z-[1]">
                                    </div>

                                    <div class="flex gap-2 relative z-[2] p-4 items-center hover:bg-[#363636] rounded-xl cursor-pointer">
                                        <img class="w-10 h-12 rounded object-cover" src="{{$item->image}}" alt="">
                                        <div class="text-ellipsis-2">{{$item->name}}</div>
                                    </div>
                                </a>
                            @else
                                <a href="{{url("/game/$item->id")}}" class="!BANNER-RIGHT-ITEM rounded-xl text-[0.9rem] items-center relative overflow-clip">
                                    <div class="flex gap-2 relative z-[2] p-4 items-center hover:bg-[#363636] rounded cursor-pointer">
                                        <img class="w-10 h-12 rounded object-cover" src="{{$item->image}}" alt="">
                                        <div class="text-ellipsis-2">{{$item->name}}</div>
                                    </div>
                                </a>
                            @endif
                        @endforeach

                        <script>

                            const arrays = document.querySelector('.BANNER-RIGHT');
                            var active = 0;

                            var sliders_data = {{ Js::from($sliders )}};

                            function next(i){
                                if(i == arrays.children.length - 2){
                                    return 0;
                                }else{
                                    return i + 1;
                                }
                            }

                            function move() {
                                {
                                    var elem = document.getElementById("progressBar");
                                    var width = 1;
                                    var id = setInterval(frame, 30);
                                    arrays.children.item(active).classList.toggle("bg-[#252525]");
                                    function frame() {
                                        if (width >= 100) {
                                            clearInterval(id);

                                            setTimeout(()=> {
                                                arrays.children.item(active).classList.toggle("bg-[#252525]");
                                                active = next(active);
                                                arrays.children.item(active).prepend(elem);
                                                document.getElementById("jumbotron-image").setAttribute(
                                                    'src', sliders_data[active]['image']
                                                )

                                                document.getElementById("jumbotron-desc").textContent = sliders_data[active]['description'];

                                                document.getElementById("jumbotron-detail").setAttribute(
                                                    'href', "/game/" + sliders_data[active]['id']
                                                );

                                                move();
                                                width = 1;
                                                elem.style.width = width + "%";
                                            },1000);


                                        } else {
                                            width++;
                                            elem.style.width = width + "%";
                                        }
                                    }
                                }
                            }
                            move();
                        </script>

{{--                        <div class="!BANNER-RIGHT-ITEM bg-[#252525] rounded-xl text-[0.9rem] items-center relative">--}}
{{--                            <div id="progressBar" class="h-full absolute bg-[#363636] rounded-xl z-[1]">--}}
{{--                            </div>--}}

{{--                            <div class="flex gap-2 relative z-[2] p-4">--}}
{{--                                <img class="w-10 h-12 rounded" src="https://cdn2.unrealengine.com/egs-callisto-protocol-carousel-thumb-1200x1600-3538cf304bd3.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                                <div class="text-ellipsis-2">The Callisto Protocol</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">--}}
{{--                            <img class="w-10 h-12 rounded"--}}
{{--                                 src="https://cdn2.unrealengine.com/egs-midnight-suns-carousel-mobile-thumb-1200x1600-9023f577c144.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                            <div class="text-ellipsis-2">Marvel's Midnight Suns</div>--}}
{{--                        </div>--}}

{{--                        <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">--}}
{{--                            <img class="w-10 h-12 rounded"--}}
{{--                                 src="https://cdn2.unrealengine.com/egs-need-for-speed-unbount-palace-edition-carousel-thumb-1200x1600-49ebf4fb1204.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                            <div class="text-ellipsis-2">Marvel's Midnight Suns</div>--}}
{{--                        </div>--}}

{{--                        <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">--}}
{{--                            <img class="w-10 h-12 rounded"--}}
{{--                                 src="https://cdn2.unrealengine.com/egs-spider-man-miles-morales-carousel-thumb-1200x1600-b7c0fb2da84b.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                            <div class="text-ellipsis-2">--}}
{{--                                Marvel's Spider-Man: Miles Morale sasdasdasdasdsa--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">--}}
{{--                            <img class="w-10 h-12 rounded"--}}
{{--                                 src="https://cdn2.unrealengine.com/egs-rubmleverse-trios-carousel-thumb-1200x1600-7f8e731a8e4c.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                            <div class="text-ellipsis-2">Rumbleverse</div>--}}
{{--                        </div>--}}

{{--                        <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">--}}
{{--                            <img class="w-10 h-12 rounded"--}}
{{--                                 src="https://cdn2.unrealengine.com/egs-fall-guys-season-3-carousel-thumb-1200x1600-c8400239635d.jpg?h=480&resize=1&w=360" alt="">--}}
{{--                            <div class="text-ellipsis-2">Fall Guys</div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="!GAMES-ON-SALE mb-12">
                    <div class="free-top py-4 text-[1.5rem]">Games on Sale</div>


                    <div class="grid grid-cols-3 gap-8">

                        @foreach($sale as $item)
                            <a href="{{url("./game/$item->id")}}" class="item">
                                <img
                                    class="w-full h-[15rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-1 mt-4">
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
                        @endforeach
                    </div>
                </div>
                <div class="!FREE-GAMES bg-[#2a2a2a] px-8 py-4 rounded mb-8">
                    <div class="free-top py-4 text-[1.5rem]">Free Games</div>

                    <div class="grid grid-cols-4 gap-4">
                        @foreach($free as $item)
                            <a href="{{url("./game/$item->id")}}" class="item">
                                <img
                                    class="w-full h-[22.5rem] object-cover  rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>{{$item->name}}</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
                <div class="!BOTTOM-GAMES-GRID grid grid-cols-3 mb-8">
                    <div class="p-4 flex flex-col gap-4">
                        <p class="text-[1.5rem]">
                            Top Sellers
                        </p>
                        @foreach($top_sellers as $item)
                            <a href="{{url("./game/$item->id")}}" class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-2">
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
                        @endforeach

                    </div>
                    <div class="p-4 flex flex-col gap-4 border-l border-l-[#2a2a2a]">
                        <p class="text-[1.5rem]">
                            Most Played
                        </p>

                        @foreach($most_played as $item)
                            <a href="{{url("./game/$item->id")}}" class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-2">
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
                        @endforeach
                    </div>
                    <div class="p-4 flex flex-col gap-4 border-l border-l-[#2a2a2a]">
                        <p class="text-[1.5rem]">
                            Newest Games
                        </p>

                        @foreach($newest as $item)
                            <a href="{{url("./game/$item->id")}}" class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="{{$item->image}}" alt="">
                                <div class="flex flex-col gap-2">
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
