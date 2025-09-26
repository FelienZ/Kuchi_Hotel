@extends('layout.template')

@section('content')
    <section class="flex flex-col min-h-screen justify-center items-center bg-white">
        <div class="content flex flex-col gap-3 bg-white drop-shadow-md p-4 w-[80%] rounded-sm">
            <div class="top grid grid-cols-2">
                <img src={{ $info['image'] }} alt="">
                <div class="information bg-white drop-shadow-sm p-4 justify-center flex flex-col gap-5">
                    <p class="font-light text-2xl text-blue-900">{{ $info['type'] }}</p>
                    <span class="flex items-center gap-2">Status: <p class="badge badge-outline badge-success">{{ $info['status'] }}</p></span>
                    <div class="flex items-center justify-between">
                        <p>Reservasi: </p>
                        <p>Rp. {{ $info['price'] }}/malam</p>
                    </div>
                    <button class="btn border-none bg-blue-900 text-white self-end">Pesan Sekarang!</button>
                </div>
            </div>
            <!-- <ul class="facilities flex flex-col gap-3">
                @foreach ($info['detail'] as $key => $i)
                    <div class="flex items-center gap-4">
                        <li>{{ strtoupper($key )}}</li>
                    </div>
                @endforeach
            </ul> -->
        </div>
    </section>
@endsection