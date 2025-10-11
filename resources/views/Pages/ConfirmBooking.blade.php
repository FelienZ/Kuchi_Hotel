@extends('layout.template')
@section('content')
<section class="min-h-screen place-content-center place-items-center">
    <form method="post" action={{url('/booking/complete/'.$rooms['id'])}} class="flex flex-col bg-white drop-shadow-sm rounded-sm lg:w-[45%] md:w-[60%] p-4 m-3 gap-4">
        @csrf
        <p class="font-bold md:text-xl text-center text-blue-900">{{$title}}</p>
        <img src={{asset($rooms['image'])}} alt="" class="w-full md:h-100">
        <div class="detail grid sm:grid-cols-2 gap-2">
            <div class="checkin flex flex-col text-center gap-2 w-full">
                <p>Check-In:</p>
                <input type="date" name="cekin" disabled value="{{$checkin}}" class="input border-none justify-center disabled:bg-blue-900 bg-blue-900 text-white disabled:text-white w-full">
                <input type="hidden" name="cekin" value="{{$checkin}}">
            </div>
            <div class="checkout flex flex-col text-center gap-2 w-full">
                <p>Check-Out:</p>
                <input type="date" name="cekout" disabled value="{{$checkout}}" class="input border-none justify-center disabled:bg-blue-900 bg-blue-900 text-white disabled:text-white w-full">
                <input type="hidden" name="cekout" value="{{$checkout}}">
            </div>
        </div>
        <div class="info flex justify-between items-center max-sm:text-xs">
            <div class="flex flex-col gap-2 items-end">
                <p>Reservasi: {{$durasi}} Malam</p>
            </div>
            <div class="flex flex-col gap-2 items-end">
                <p id="price">{{$rooms['price']}}</p>
                <p id="totalPrice">{{$price}}</p>
                <input type="hidden" name="price" value="{{$price}}">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-2">
            <a href={{url('booking/create/'.$rooms['id'])}} class="btn btn-warning ">Edit</a>
            <button class="btn bg-blue-900 border-none">Checkin!</button>
        </div>
    </form>
</section>
@endsection