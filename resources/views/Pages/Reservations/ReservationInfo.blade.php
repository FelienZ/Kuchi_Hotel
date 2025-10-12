@extends('layout.template')
@section('content')
<section class="min-h-screen place-content-center place-items-center">
    <div class="content flex flex-col md:w-[50%] gap-3 rounded-sm p-4 bg-white drop-shadow-sm">
        <p class="font-bold md:text-xl text-blue-900 text-center">{{$room['type']}}</p>
        <img src={{ asset($room['image']) }} alt="" class="w-full h-110">
        <p class="font-bold text-blue-900">Informasi Pemesanan: </p>
        <div class="info flex flex-col gap-2 p-2">
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-2">
                    <p>Pemesan: {{ $guest ->name}}</p>
                    <a href={{ url('rooms/details/'.$room['id']) }} class="badge badge-outline badge-primary">Info Kamar</a>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Berlaku Hingga: {{ $end }}</p>
                    <div class="badge badge-outline badge-success">Dalam Pemesanan</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection