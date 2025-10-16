@extends('layout.template')

@section('content')
    <section class="flex flex-col min-h-screen justify-center items-center bg-white">
        <div class="content flex flex-col gap-3 bg-white drop-shadow-md p-4 sm:w-[80%] rounded-sm">
            <div class="top grid sm:grid-cols-2 gap-3">
                <img src={{ asset($info['image'] )}} alt="" class="size-full">
                <div class="information bg-white drop-shadow-sm p-4 justify-center items-center flex flex-col gap-5">
                    <p class="font-light text-2xl text-blue-900">{{ $info['type'] }}</p>
                    <span class="flex items-center gap-2">Status: <p class="badge badge-outline <?=$info['status'] == 'available' ? 'badge-success' : 'badge-error'?>">{{ $info['status'] == 'available' ? 'available' : 'unavailable'}}</p></span>
                    <div class="flex items-center gap-3">
                        <p>Reservasi: </p>
                        <p id="price">{{ $info['price'] }}</p>
                    </div>
                    <a href={{url('booking/create/'.$info['id'])}} class="btn border-none bg-blue-900 text-white">Pesan Sekarang!</a>
                </div>
            </div>
            @php
                $listBeds = [];
                    foreach($info['detail']['beds'] as $bed => $b){
                        if($b == '1'){
                            $listBeds[] = $bed;
                        }
                    }
                $value = join(', ', $listBeds)        
            @endphp
            <ul class="facilities max-sm:flex max-sm:flex-col max-sm:justify-between grid md:grid-cols-2 place-content-center gap-3">
                @foreach ($info['detail'] as $key => $i)
                    <div class="flex items-center gap-8">
                        <div class="flex items-center justify-between max-sm:w-[35%] w-[45%]">
                            <li class="">{{ strtoupper($key )}}</li>
                            <p>:</p>
                        </div>
                        <li class="w-fit">
                        {{ is_array($i) ? $value : ($i == '0' ? '-' :$i.' '.$key) }}
                        </li>
                    </div>
                @endforeach
            </ul>
        </div>
    </section>
@endsection