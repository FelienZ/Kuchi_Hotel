@extends('layout.template')
@section('content')
<section class="bg-white min-h-screen flex flex-col p-5">
    <p class="text-2xl font-light text-blue-800 text-center">ROOMS & SUITE</p>
    <div class="grid grid-cols-2 gap-4 m-5 bg-white">
        @foreach ($rooms as $r)
            <div class="flex flex-col gap-3 p-3 rounded-sm bg-white drop-shadow-sm">
                <!-- <img src={{ $r['image']}} alt="" class="w-full h-80"> -->
                 <div class="w-full h-80" style= "background: url(<?= $r['image'];?>) center center / cover no-repeat;">

                 </div>
                <p class="text-blue-800 text-xl font-light">{{ $r['type'] }}</p>
                <div class="flex items-center justify-between">
                    <p class="text-blue-800 text-xl">Rp. {{ $r['price']}}</p>
                    <button class="btn btn-outline btn-success">{{ $r['status'] }}</button>
                </div>
                <button class="btn bg-blue-800 border-none">Check More..</button>
            </div>
        @endforeach
    </div>
</section>
@endsection