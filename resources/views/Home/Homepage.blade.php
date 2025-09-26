@extends('layout.template')
@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="bg-white drop-shadow-md rounded-sm grid sm:grid-cols-2 gap-3 p-3 h-[80vh] m-5">
            <div class="image grid grid-rows-2 gap-4">
                <div class="image1 rounded-sm bg-white p-3 drop-shadow-md" style="background: url('/images/bar.jpg') center center / cover no-repeat;"></div>
                <div class="image2 flex flex-col justify-end text-white gap-3 rounded-sm bg-white p-3 drop-shadow-md" style="background: url('/images/pool.jpg') center center / cover no-repeat;">
                    <div class="text shadow-lg ">
                        <p class="font-bold drop-shadow-sm">Welcome to Kuchi Hotel!</p>
                        <p class="drop-shadow-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class=" grid">
                <div class="image1 justify-end text-right text-white flex flex-col rounded-sm bg-white p-3 drop-shadow-md" style="background: url('/images/room1.jpg') center center / cover no-repeat;">
                    <p class="font-bold">KUCHI HOTEL</p>
                </div>
            </div>
        </div>
        <div class="detail w-[90%] self-center m-5">
            <div class="content grid grid-cols-2">
                <div class="left flex items-center justify-evenly gap-2 w-full">
                    <img src="/images/kuchi.png" alt="" class="size-30 drop-shadow-md rounded-sm">
                    <div class="information flex flex-col h-full gap-2">
                        <p class="font-bold text-2xl text-blue-900 font-[Outfit]">KUCHI HOTEL</p>
                        <div class="more flex flex-col gap-2">
                            <p>Oh my God Beautiful amazing</p>
                            <div class="flex items-center gap-2 justify-end text-yellow-400">
                                @for($i = 0; $i <5; $i++)
                                <i class="fa-solid fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right flex flex-col gap-3">
                    <p class="font-medium font-[Outfit] text-xl text-blue-900">About Us</p>
                    <div class="content grid grid-cols-2 gap-2">
                        <div class="location flex items-center gap-4">
                            <i class="fa-solid fa-location-dot text-blue-900 text-2xl"></i>
                            <p class="text-sm">Jl. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, quasi.</p>
                        </div>
                        <div class="info flex flex-col gap-3 p-4 bg-white drop-shadow-sm w-[90%]">
                            <div class="phone flex items-center justify-between w-full">
                                <i class="fa-solid text-blue-900 fa-phone"></i>
                                <p>+62-81234-5678</p>
                            </div>
                            <div class="email flex items-center gap-3 justify-between w-full">
                                <i class="fa-solid text-blue-900 fa-envelope"></i>
                                <p>Kuchihotels@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection