@extends('layout.template')
@section('content')
<section id="parentElement" class="min-h-screen place-content-center place-items-center">
    <form action={{url('booking/confirm/'.$rooms['id'])}} class="flex flex-col bg-white drop-shadow-sm rounded-sm p-4 md:w-[60%] gap-4 m-5">
        @csrf
        <img src={{asset($rooms['image'])}} alt="gambar-{{$rooms['type']}}" class="w-full h-110">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-3">
                <p class="font-bold sm:text-xl text-blue-900">{{$rooms['type']}}</p>
                <p class="text-sm">Rp. {{$rooms['price']}}/night</p>
                <p class="text-sm badge badge-outline {{$rooms['status'] == 'available' ? 'badge-success' : 'badge-error'}}">{{$rooms['status']}}</p>
            </div>
            <button type="submit" class="btn border-none bg-blue-900 rounded-full">Book Now</button>
        </div>
        <div class="order flex max-sm:flex-col justify-center items-center bg-white drop-shadow-sm rounded-sm p-4 w-full">
            <div class="flex max-sm:grid items-center gap-5 w-full">
                <div class="check-in flex flex-col gap-2 w-full">
                    <p>check-in: </p>
                    <input type="date" name="cekin" value="{{old('cekin')}}" class="input bg-blue-900 w-full text-white">
                </div>
                <div class="check-out flex flex-col gap-2 w-full">
                    <p>check-out: </p>
                    <input type="date" name="cekout" value="{{old('cekout')}}" class="input bg-blue-900 w-full text-white">
                </div>
                <div class="type flex flex-col gap-2 w-full">
                    <p>Tipe: </p>
                    <select name="roomtype" class="select bg-blue-900 w-full text-white">
                        <option value={{$rooms['id']}} selected>{{$rooms['type']}}</option>
                    </select>
                </div>
            </div>
        </div>
            @php
                $listBeds = [];
                    foreach($rooms['detail']['beds'] as $bed => $b){
                        if($b == '1'){
                            $listBeds[] = $bed;
                        }
                    }
                $value = join(', ', $listBeds)        
            @endphp
            <ul class="facilities max-sm:flex max-lg:text-xs max-sm:flex-col max-sm:justify-between grid sm:grid-cols-2 place-content-center gap-3 p-3">
                @foreach ($rooms['detail'] as $key => $i)
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
    </form>
    @if (session('message'))
            <div class="sessionAlert alert alert-error z-40 text-white fixed inset-0 place-self-end m-4">
                <p>{{session('message')}}</p>
            </div>
    @endif
</section>
@endsection