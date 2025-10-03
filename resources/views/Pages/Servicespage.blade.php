@extends('layout.template')
@section('content')
    <section>
        <div class="flex flex-col min-h-screen w-[85%] my-5 place-self-center bg-white drop-shadow-sm">
            <div class="top flex text-white h-100 p-5 items-end justify-between" style="background: url({{asset('/images/pool.jpg')}}) center center / cover no-repeat;">
                <div class="content flex flex-col gap-3 shadow-md">
                    <p class="text-3xl drop-shadow-sm">Our Services</p>
                    <p class="drop-shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <p class="text-xl shadow-md font-bold">Swimming Pool</p>
            </div>
            <div class="facilities flex flex-col gap-4 w-[90%] self-center my-5">
            <div class="top flex max-sm:flex-col gap-3 items-center justify-between">
                <p class="text-2xl text-blue-900">OUR SERVICES</p>
                <div class="features flex items-center gap-3">
                    <p class="badge badge-outline badge-neutral rounded-none">Restaurant</p>
                    <p class="badge badge-outline badge-neutral rounded-none">Healthcare</p>
                    <p class="badge badge-outline badge-neutral rounded-none">Fitness</p>
                    <p class="badge badge-outline badge-neutral rounded-none">Socials</p>
                </div>
            </div>
            <div class="bottom grid md:grid-cols-3 gap-3">
                @foreach ($facilities as $f)
                    <a href={{url('/services/details/'.$f['id'])}} class="flex flex-col gap-3 p-3 rounded-sm bg-white drop-shadow-md">
                        <img src={{ asset($f['image']) }} alt="" class="w-full h-60">
                        <p class="text-xl font-semibold text-blue-900 h-12 flex items-center">{{ $f['title'] }}</p>
                        <p class="text-justify">{{ $f['descriptions'] }}</p>
                        <div class="flex max-lg:flex-col items-center justify-between">
                            <p class="font-semibold">Operational:</p>
                            <p class="badge badge-outline badge-neutral rounded-sm">{{ $f['open'] }} - {{$f['closed']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection