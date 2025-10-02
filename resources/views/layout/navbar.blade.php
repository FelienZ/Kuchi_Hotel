<div class="flex fixed z-20 items-center justify-between p-5 px-10 font-[Outfit] bg-blue-900 text-white w-screen">
    <div class="left flex items-center gap-3">
        <i class="fa-solid fa-hotel"></i>
        <p class="font-semibold text-xl">Kuchi Hotel</p>
    </div>
    <ul class="right flex items-center gap-4 max-sm:hidden md:gap-8">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{ url('/rooms') }}">Rooms</a></li>
        <li><a href="{{url('/services')}}">Services</a></li>
    </ul>
    <button id="btnTrigger" class="sm:hidden btn btn-ghost active:bg-transparent border border-white"><i class="fa-solid fa-bars"></i></button>
    <ul id="navSmall" class="hidden transition-opacity sm:hidden flex-col items-center absolute bg-blue-900 left-0 right-0 z-30 top-20 p-4 gap-8 md:gap-8">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{ url('/rooms') }}">Rooms</a></li>
        <li><a href="{{url('/services')}}">Services</a></li>
    </ul>
    <button class="btn bg-white/50 border-none rounded-full"><i class="fa-solid fa-user text-sm"></i> Login</button>
</div>