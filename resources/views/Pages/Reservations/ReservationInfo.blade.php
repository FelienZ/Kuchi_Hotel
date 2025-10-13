@extends('layout.template')
@section('content')
<section class="min-h-screen place-content-center place-items-center">
    <div class="content flex flex-col sm:w-[70%] xl:w-[60%] my-5 gap-3 rounded-sm p-4 bg-white drop-shadow-sm">
        <p class="font-bold md:text-xl text-blue-900 text-center">{{strtoupper($room['type'])}}</p>
        <img src={{ asset($room['image']) }} alt="" class="w-full max-sm:h-70 h-90 lg:h-120">
        <p class="font-bold text-blue-900">Informasi Pemesanan: </p>
        <div class="info flex flex-col gap-2 p-2">
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-2">
                    <p class="max-sm:text-xs">Pemesan: {{ $guest ->name}}</p>
                    <a href={{ url('rooms/details/'.$room['id']) }} class="badge max-sm:text-xs badge-primary">Info Kamar</a>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="max-sm:text-xs">Berlaku Hingga: {{ $end }}</p>
                    <div class="badge badge-outline max-sm:text-xs <?= $reservation['status'] == 'active' ? 'badge-success' : 'badge-error' ?>"><?= $reservation['status'] == 'active' ? 'Dalam Reservasi' : 'Out of Date' ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection