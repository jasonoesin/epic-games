<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                -webkit-font-smoothing: antialiased;
                background-color: #121212;
                color: white;
            }

            header{
                background-color: #2a2a2a;
            }

            header a{
                display: block;
                font-family: OpenSans,sans-serif,arial;
                height: 100%;
                letter-spacing: .075em;
                max-height: 3.7em;
                padding: 0 1em;
                text-transform: uppercase;
                font-size: 10.5px;
                font-weight: 400;
                color: #ccc;
                font-feature-settings: "kern" 1;
            }

            .sticky .navs{
                font-family: Inter,sans-serif;
                background-color: #121212;
                color: #646464;
                font-size: 0.9rem;
            }

            .active{
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

            #progressBar{
                transition: all;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <div class="navs flex py-4 gap-4 px-4">
                <a href="">STORE</a>
                <a href="">FAQ</a>
                <a href="">HELP</a>
                <a href="">UNREAL ENGINE</a>
            </div>
        </header>

        <section class="">
            <div class="sticky top-0 z-[5]">
                <div class="navs flex py-8 items-center gap-8 px-[12rem]">
                    <label>
                        <input class="bg-[#202020] px-4 py-2 w-[12.5rem] rounded-3xl" placeholder="Search Store">
                    </label>
                    <a href="" class="active">Discover</a>
                    <a href="">Browse</a>
                </div>
            </div>

            <div class="content">
                <div class="px-[12rem]">
                    <div class="!BANNER mb-8 grid grid-cols-[80%_20%]">
                        <img class="rounded-xl" src="https://cdn2.unrealengine.com/egs-callisto-protocol-carousel-desktop-1248x702-d7e27f0eb16a.jpg?h=1080&resize=1&w=1920" alt="">
                        <div class="BANNER-RIGHT px-4 flex flex-col gap-2">
                            <div class="!BANNER-RIGHT-ITEM bg-[#252525] rounded-xl text-[0.9rem] items-center relative">
                                <div id="progressBar" class="h-full absolute bg-[#363636] rounded-xl z-[1]">
                                </div>

                                <div class="flex gap-2 relative z-[2] p-4">
                                    <img class="w-10 h-12 rounded" src="https://cdn2.unrealengine.com/egs-callisto-protocol-carousel-thumb-1200x1600-3538cf304bd3.jpg?h=480&resize=1&w=360" alt="">
                                    <div class="text-ellipsis-2">The Callisto Protocol</div>
                                </div>

                            </div>

                            <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">
                                <img class="w-10 h-12 rounded"
                                     src="https://cdn2.unrealengine.com/egs-midnight-suns-carousel-mobile-thumb-1200x1600-9023f577c144.jpg?h=480&resize=1&w=360" alt="">
                                <div class="text-ellipsis-2">Marvel's Midnight Suns</div>
                            </div>

                            <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">
                                <img class="w-10 h-12 rounded"
                                     src="https://cdn2.unrealengine.com/egs-need-for-speed-unbount-palace-edition-carousel-thumb-1200x1600-49ebf4fb1204.jpg?h=480&resize=1&w=360" alt="">
                                <div class="text-ellipsis-2">Marvel's Midnight Suns</div>
                            </div>

                            <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">
                                <img class="w-10 h-12 rounded"
                                     src="https://cdn2.unrealengine.com/egs-spider-man-miles-morales-carousel-thumb-1200x1600-b7c0fb2da84b.jpg?h=480&resize=1&w=360" alt="">
                                <div class="text-ellipsis-2">
                                    Marvel's Spider-Man: Miles Morale sasdasdasdasdsa
                                </div>
                            </div>

                            <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">
                                <img class="w-10 h-12 rounded"
                                     src="https://cdn2.unrealengine.com/egs-rubmleverse-trios-carousel-thumb-1200x1600-7f8e731a8e4c.jpg?h=480&resize=1&w=360" alt="">
                                <div class="text-ellipsis-2">Rumbleverse</div>
                            </div>

                            <div class="!BANNER-RIGHT-ITEM flex gap-2 p-4 rounded-xl text-[0.9rem] items-center">
                                <img class="w-10 h-12 rounded"
                                     src="https://cdn2.unrealengine.com/egs-fall-guys-season-3-carousel-thumb-1200x1600-c8400239635d.jpg?h=480&resize=1&w=360" alt="">
                                <div class="text-ellipsis-2">Fall Guys</div>
                            </div>
                        </div>
                    </div>
                    <div class="!GAMES-ON-SALE mb-12">
                        <div class="free-top py-4">Games on Sale</div>

                        <div class="grid grid-cols-3 gap-8">
                            <div class="item">
                                <img
                                    class="w-full h-[15rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                            <div class="item">
                                <img
                                    class="w-full h-[15rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                            <div class="item">
                                <img
                                    class="w-full h-[15rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="!FREE-GAMES bg-[#2a2a2a] px-8 py-4 rounded mb-8">
                        <div class="free-top py-4">Free Games</div>

                        <div class="grid grid-cols-4 gap-4">
                            <div class="item">
                                <img
                                    class="w-full h-[22.5rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                            <div class="item">
                                <img
                                    class="w-full h-[22.5rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                            <div class="item">
                                <img
                                    class="w-full h-[22.5rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                            <div class="item">
                                <img
                                    class="w-full h-[22.5rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-1 mt-4">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem] text-gray-400">Free Now</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="!BOTTOM-GAMES-GRID grid grid-cols-3">
                        <div class="p-4 flex flex-col gap-4">
                            <p>
                                Top Sellers
                            </p>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col gap-4 border-l border-l-[#2a2a2a]">
                            <p>
                                Top Sellers
                            </p>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col gap-4 border-l border-l-[#2a2a2a]">
                            <p>
                                Top Sellers
                            </p>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                            <div class="top-seller flex items-center gap-4 text-[0.9rem] hover:bg-[#2a2a2a] max-w-[30rem]
px-4 py-2 rounded-xl cursor-pointer">
                                <img
                                    class="w-[4.5rem] h-[6rem] object-cover rounded"
                                    src="https://dafunda.com/wp-content/uploads/2022/08/Spesifikasi-PC-Goat-Simulator-3.jpeg" alt="">
                                <div class="flex flex-col gap-2">
                                    <p>Goat Simulator 3</p>
                                    <p class="text-[0.8rem]">IDR 431,061</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    <script>

        // const listItems = document.querySelector(".BANNER-RIGHT").children;
        // const listArray = Array.from(listItems);
        //
        // while(true){
        //     if(width === 1){
        //         var elem = listArray[0].children[0]
        //         var width = 1;
        //         var id = setInterval(frame, 50);
        //
        //         function frame() {
        //             if (width >= 100) {
        //                 clearInterval(id);
        //             } else {
        //                 width++;
        //                 elem.style.width = width + "%";
        //             }
        //         }
        //     }
        // }

    </script>
        </body>
</html>
