<style>
    body {
        -webkit-font-smoothing: antialiased;
        background-color: #121212;
        color: white;
    }

    header , .nav-link{
        background-color: #2a2a2a;
    }

    .nav-link a {
        padding: 0.5rem 0.25rem;
        font-size: 0.6rem;
        cursor: pointer;
    }

    .nav-link a:hover{
        color: white;
    }

    header a{
        display: block;
        font-family: OpenSans,sans-serif,arial;
        height: 100%;
        letter-spacing: .075em;
        padding: 0 1em;
        text-transform: uppercase;
        font-size: 10.5px;
        font-weight: 400;
        color: #ccc;
        font-feature-settings: "kern" 1;
    }

    .dropdown-hover:hover .dropdown{
        display: flex;
    }
    .dropdown{
        display: none;
    }
</style>

<header>
    <div class="navs flex justify-between h-[3rem]">
        <div class="flex gap-4 px-4 left">

            <div href="" class="relative">
                <a class="flex items-center">
                    STORE
                </a>
                <div class="blue-border absolute w-full h-full top-0 border-b-4 border-b-[#0078f2]">

                </div>
            </div>
            <a href="" class="flex items-center">FAQ</a>
            <a href="" class="flex items-center">HELP</a>
            <a href="" class="flex items-center">UNREAL ENGINE</a>
        </div>

        <div class="flex right h-full">
            <div class="dropdown-hover">
                <a href="{{url('/login')}}" class=" flex items-center w-[8rem] justify-center relative">
                    @if(!\Illuminate\Support\Facades\Auth::user())
                        <span class="">
                            SIGN IN
                        </span>
                    @else
                        <span class="text-ellipsis overflow-hidden whitespace-nowrap">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </span>
                    @endif
                </a>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <div class="dropdown py-1 nav-link absolute top-[3rem] z-[10] flex items-center w-[8rem] justify-center flex-col ">
                        <a href="{{url('/wishlist')}}" class="">MY WISHLISTS</a>
                        <a class="">MY GAMES</a>
                        <a href="{{url('/logout')}}" class="">LOGOUT</a>
                    </div>
                @endif
            </div>

            <a href="" class="bg-[#0078f2] h-full flex items-center px-8">DOWNLOAD</a>
        </div>
    </div>
</header>
