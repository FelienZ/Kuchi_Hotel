<div class="flex fixed z-20 items-center justify-between p-5 px-10 font-[Outfit] bg-blue-900 text-white w-screen">
    <div class="left flex items-center gap-3">
        <i class="fa-solid fa-hotel"></i>
        <p class="font-semibold text-xl text-nowrap">Kuchi Hotel</p>
    </div>
    <ul class="right flex items-center gap-4 max-sm:hidden md:gap-8">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{ url('/rooms') }}">Rooms</a></li>
        <li><a href="{{url('/services')}}">Services</a></li>
    </ul>
    <button id="btnTrigger" class="sm:hidden btn btn-ghost active:bg-transparent border border-white"><i class="fa-solid fa-bars"></i></button>
    <ul id="navSmall" class="hidden transition-opacity sm:hidden flex-col items-center absolute bg-blue-900 left-0 right-0 z-30 top-20 p-4 gap-8 md:gap-8">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/rooms') }}">Rooms</a></li>
        <li><a href="{{url('/services')}}">Services</a></li>
        <li class="flex items-center gap-3">
            <a href="{{url('login')}}" class="badge badge-outline">Login</a>
            <a href="{{url('register')}}" class="badge badge-outline">Register</a>
        </li>
    </ul>
    @auth
    <form action={{url('/logout')}} method="post" class="max-sm:hidden flex gap-2 items-center">
        @csrf
        <a href={{url('profile')}} class="flex items-center size-10 bg-blue-900 btn border-none text-white rounded-full"><i class="fa-solid fa-user"></i></a>
        <x-primary-button> {{ __('Logout') }} <i class="fa-solid fa-arrow-right-from-bracket rotate-180"></i> </x-primary-button>
    </form>
    @endauth
    @guest
    <form action={{url('/login')}} class="max-sm:hidden">
        @csrf
        <x-primary-button> {{ __('Login') }} <i class="fa-solid fa-arrow-right-from-bracket"></i> </x-primary-button>
    </form>
    @endguest
</div>