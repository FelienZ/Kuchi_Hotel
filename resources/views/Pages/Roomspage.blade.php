@extends('layout.template')
@section('content')
<section class="bg-white min-h-screen w-full flex flex-col p-5">
    <p class="text-2xl font-light text-blue-800 text-center">ROOMS & SUITE</p>
    <div class="grid sm:grid-cols-2 w-full lg:w-[85%] place-self-center gap-4 m-5 bg-white">
        @foreach ($rooms as $r)
            <div class="flex flex-col gap-3 p-3 rounded-sm bg-white drop-shadow-sm">
                <!-- <img src={{ $r['image']}} alt="" class="w-full h-80"> -->
                 <div class="w-full h-80 max-sm:h-50 flex justify-end rounded-sm" style= "background: url(<?= $r['image'];?>) center center / cover no-repeat;">
                    <a href="/rooms/details/{{ $r['id'] }}" class="btn bg-white/50 drop-shadow-lg border-none self-end m-5 max-sm:hidden">More Info</a>
                 </div>
                <p class="text-blue-800 text-xl max-sm:text-lg font-light h-12 justify-center flex items-center">{{ $r['type'] }}</p>
                <div class="flex max-sm:flex-col gap-3 items-center justify-between">
                    <p class="text-blue-800 text-xl max-sm:text-sm text-nowrap">Rp. {{ $r['price']}}</p>
                    <p class="badge badge-outline badge-success max-sm:text-sm">{{ $r['status'] }}</p>
                </div>
                <button class="btn bg-blue-800 border-none font-medium">Check-In Now !</button>
            </div>
        @endforeach
    </div>
</section>
@endsection