<div class="flex fixed z-20 items-center justify-between p-5 font-[Outfit] bg-blue-900 text-white w-screen">
    <div class="left flex items-center gap-3">
        <i class="fa-solid fa-hotel"></i>
        <p class="font-semibold text-xl">Kuchi Hotel</p>
    </div>
    <ul class="right flex items-center gap-4 max-sm:hidden md:gap-8">
        <li><a href="/">Home</a></li>
        <li><a href="/rooms">Rooms</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
    <button id="btnTrigger" class="sm:hidden btn btn-ghost active:bg-transparent border border-white"><i class="fa-solid fa-bars"></i></button>
    <ul id="navSmall" class="hidden transition-opacity sm:hidden flex-col items-center absolute bg-blue-900 left-0 right-0 z-30 top-20 p-4 gap-8 md:gap-8">
        <li><a href="/">Home</a></li>
        <li><a href="/rooms">Rooms</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
    <button class="bg-white/60 max-sm:hidden py-1 px-3 rounded-full"><i class="fa-solid fa-user text-sm"></i> Login</button>
</div>