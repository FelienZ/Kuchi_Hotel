@extends('layout.template')
@section('content')
    <section id="parentElement" class="flex flex-col gap-10 min-h-screen">
        <div class="bg-white drop-shadow-md rounded-sm grid sm:grid-cols-2 gap-3 p-3 h-[80vh] m-5">
            <div class="image grid grid-rows-2 gap-4">
                <div class="image1 rounded-sm bg-white p-3 drop-shadow-md" style="background: url('{{ asset('images/bar.jpg') }}')  center center / cover no-repeat;"></div>
                <div class="image2 flex flex-col justify-end text-white gap-3 rounded-sm bg-white p-3 drop-shadow-md" style="background: url('{{ asset('images/pool.jpg') }}')  center center / cover no-repeat;">
                    <div class="text shadow-lg ">
                        <p class="font-bold drop-shadow-sm">Welcome to Kuchi Hotel!</p>
                        <p class="drop-shadow-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class=" grid">
                <div class="image1 justify-end text-right text-white flex flex-col rounded-sm bg-white p-3 drop-shadow-md" style="background: url('{{ asset('images/room1.jpg') }}') center center / cover no-repeat;">
                    <p class="font-bold">KUCHI HOTEL</p>
                </div>
            </div>
        </div>
        <div class="detail self-center w-[80%]">
            <div class="content grid gap-4 sm:grid-cols-2">
                <div class="left flex items-center justify-evenly gap-2 w-full">
                    <img src="{{asset('images/kuchi.png')}}" alt="" class="size-30 drop-shadow-md rounded-sm">
                    <div class="information flex flex-col h-full gap-2">
                        <p class="font-bold text-2xl text-blue-900 font-[Outfit] max-sm:text-sm">KUCHI HOTEL</p>
                        <div class="more flex flex-col gap-2">
                            <p>Oh my God Beautiful amazing</p>
                            <div class="flex items-center sm:gap-2 justify-end text-yellow-400">
                                @for($i = 0; $i <5; $i++)
                                <i class="fa-solid fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right flex flex-col gap-3">
                    <p class="font-medium font-[Outfit] text-xl text-blue-900 self-end">ABOUT US</p>
                    <div class="content grid sm:grid-cols-2 gap-2">
                        <div class="location flex items-center gap-4">
                            <i class="fa-solid fa-location-dot text-blue-900 text-2xl"></i>
                            <p class="text-sm">Jl. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, quasi.</p>
                        </div>
                        <div class="info flex flex-col gap-3 p-4 bg-white drop-shadow-sm overflow-auto">
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

        <div class="order flex max-sm:flex-col justify-center items-center bg-white drop-shadow-sm rounded-sm p-4 w-[80%] self-center">
            <p class="font-bold text-blue-900 sm:hidden text-nowrap">Book Now!</p>
            <form action={{url('booking/matchData')}} method="POST" class="flex max-sm:grid items-center gap-5 w-full">
                @csrf
                <div class="bookNow flex flex-col items-center gap-2 w-full">
                    <p class="font-bold text-blue-900 max-sm:hidden text-nowrap">Book Now!</p>
                    <button class="btn bg-blue-900 border-none rounded-full w-fit text-white">Check-In</button>
                </div>
                <div class="check-in flex flex-col gap-2 w-full">
                    <p>check-in: </p>
                    <input type="date" name="cekin" value="{{old('cekin')}}"  class="input bg-blue-900 w-full text-white">
                </div>
                <div class="check-out flex flex-col gap-2 w-full">
                    <p>check-out: </p>
                    <input type="date" name="cekout" value="{{old('cekout')}}"  class="input bg-blue-900 w-full text-white">
                </div>
                <div class="type flex flex-col gap-2 w-full">
                    <p>Tipe: </p>
                    <select name="roomtype" value="{{old('roomtype')}}"  class="select bg-blue-900 w-full text-white">
                        <option value="" disabled hidden selected>Tipe Kamar</option>
                        <option value="King's Rooms">King's Suites</option>
                        <option value="Ultra Lux Rooms">Ultra Suites</option>
                        <option value="Deluxe Rooms">Deluxe Suites</option>
                        <option value="Express Rooms">Express Suites</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="facilities flex flex-col gap-4 w-[90%] self-center my-5">
            <div class="top flex max-sm:flex-col gap-3 items-center justify-between">
                <p class="text-2xl text-blue-900">OUR SERVICES</p>
                <div class="features flex items-center gap-3">
                    <p class="badge badge-outline badge-neutral rounded-none">Restaurant</p>
                    <p class="badge badge-outline badge-neutral rounded-none">Healthcare</p>
                    <p class="badge badge-outline badge-neutral rounded-none">Fitness</p>
                </div>
            </div>
            <div class="bottom grid md:grid-cols-3 gap-3">
                @foreach ($facilities as $key => $f)
                    @if ($key < 3)
                    <a href={{url('/services/details/'.$f['id'])}} class="flex flex-col gap-3 p-3 rounded-sm bg-white drop-shadow-md">
                        <img src={{ $f['image'] }} alt="" class="w-full h-60">
                        <p class="text-xl font-semibold text-blue-900 h-12 flex items-center">{{ $f['title'] }}</p>
                        <p class="text-justify">{{ $f['descriptions'] }}</p>
                        <div class="flex max-lg:flex-col items-center justify-between">
                            <p class="font-semibold">Operational:</p>
                            <p class="badge badge-outline badge-neutral rounded-sm">{{ $f['open'] }} - {{$f['closed']}}</p>
                        </div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
        @if (session('message'))
            <div class="sessionAlert alert alert-error z-40 text-white fixed inset-0 place-self-end m-4">
                <p>{{session('message')}}</p>
            </div>
        @elseif (session('success'))
        @endif
            <div class="sessionAlert alert alert-success z-40 text-white fixed inset-0 place-self-end m-4">
                <p>{{session('success')}}</p>
            </div>
    </section>
@endsection