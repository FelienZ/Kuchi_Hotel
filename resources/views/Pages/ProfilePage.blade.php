@extends('layout.template')
@section('content')
    <section id="parentElement" class="min-h-screen place-content-center place-items-center">
        <div class="flex flex-col bg-white drop-shadow-sm min-h-screen gap-5 my-5 lg:w-[60%] p-4 rounded-sm">
            <div class="profile bg-white rounded-sm grid md:grid-cols-[auto_1fr] gap-3 drop-shadow-sm place-content-center place-items-center p-3">
                <img src={{asset('images/user.png')}} alt="" class="max-md:size-40 md:size-50">
                <div class=" flex flex-col justify-between gap-2 w-full p-2">
                    <p class="font-semibold">Your Name:</p>
                    <input type="text" disabled value={{$user['name']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <p class="font-semibold">Your Email:</p>
                    <input type="email" disabled value={{$user['email']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <div class="grid grid-cols-2 self-end items-center gap-2">
                        <label for="modal_profile" class="btn max-sm:text-[12px] btn-warning text-white">Edit Profile <i class="fa-solid fa-edit"></i></label>
                        <label for="modal_password" class="btn max-sm:text-[12px] btn-error text-white">Change Password <i class="fa-solid fa-key"></i></label>
                    </div>
                </div>
            </div>
            <div class="reservations drop-shadow-sm rounded-sm bg-white p-5 h-screen overflow-y-auto flex flex-col gap-3">
                <p class="font-semibold lg:text-xl">Riwayat Reservasi</p>
                @if (count($reservations) > 0)
                    @foreach ($reservations as $key => $r)
                        <div class="top bg-white drop-shadow-sm rounded-sm grid md:flex place-items-center max-md:text-center gap-3 p-3">
                            <p>{{$key+1}}. </p>
                            <img src={{asset($r['image'])}} class="h-20 w-30">
                            <div class="detail flex flex-col gap-2">
                                <p class="font-bold">{{$r['type']}}</p>
                                <p>Dipesan pada: {{$date_detail[$key]}}</p>
                                <p>Reservasi: {{ $duration[$key] }} malam</p>
                            </div>
                        </div>
                    @endforeach
                @else
                        <div class="empty flex flex-col justify-center h-screen">
                            <p class="text-center">Belum Ada Pemesanan!</p>
                        </div>
                @endif
            </div>
        </div>
        @if (session('error'))
            <div class="sessionAlert alert alert-error z-40 text-white fixed inset-0 place-self-end m-4">
                <p>{{session('error')}}</p>
            </div>
        @elseif (session('success'))
                <div class="sessionAlert alert alert-success z-40 text-white fixed inset-0 place-self-end m-4">
                    <p>{{session('success')}}</p>
                </div>
        @endif
    </section>
@endsection