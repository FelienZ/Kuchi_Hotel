@extends('layout.template')
@section('content')
<section class="min-h-screen place-content-center place-items-center">
    <form class="flex flex-col bg-white drop-shadow-md md:w-[60%] p-4 m-3 gap-4">
        <p class="font-bold md:text-xl text-center text-blue-900">{{$title}}</p>
        <img src={{asset($rooms['image'])}} alt="" class="w-full h-100">
        <div class="detail grid sm:grid-cols-2 gap-2">
            <div class="checkin flex flex-col text-center gap-2 w-full">
                <p>Check-In:</p>
                <input type="date" name="cekin" value={{$checkin}} class="input bg-blue-900 text-white w-full">
            </div>
            <div class="checkout flex flex-col text-center gap-2 w-full">
                <p>Check-Out:</p>
                <input type="date" name="cekout" value={{$checkout}} class="input bg-blue-900 text-white w-full">
            </div>
        </div>
        <div class="info flex justify-between items-center">
            <p>Reservasi: {{$durasi}} Malam</p>
            <p>Rp. {{$rooms['price']}}/malam</p>
        </div>
        <div class="grid sm:grid-cols-2 gap-2">
            <button class="btn btn-warning ">Edit</button>
            <button class="btn bg-blue-900 border-none">Checkin!</button>
        </div>
    </form>
</section>
@endsection