@extends('layout.template')
@section('content')
    <section class="min-h-screen place-content-center place-items-center">
        <div class="flex flex-col bg-white drop-shadow-sm min-h-screen gap-5 my-5 md:w-[60%] p-4 rounded-sm">
            <div class="profile bg-white rounded-sm grid md:grid-cols-[auto_1fr] gap-3 drop-shadow-sm place-content-center place-items-center p-3">
                <img src={{asset('images/user.png')}} alt="" class="max-md:size-40 md:size-50">
                <div class=" flex flex-col justify-between gap-2 w-full p-2">
                    <p class="font-semibold">Your Name:</p>
                    <input type="text" disabled value={{$user['name']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <p class="font-semibold">Your Email:</p>
                    <input type="email" disabled value={{$user['email']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <div class="flex self-end items-center gap-2">
                        <label for="modal_profile" class="btn btn-warning w-fit text-white">Edit Profile <i class="fa-solid fa-edit"></i></label>
                        <label for="modal_password" class="btn btn-error w-fit text-white">Change Password <i class="fa-solid fa-key"></i></label>
                    </div>
                </div>
            </div>
            <div class="reservations drop-shadow-sm rounded-sm bg-white p-3 max-h-screen overflow-y-auto flex flex-col gap-3">
                <p class="font-semibold">Daftar Reservasi</p>
                @if (count($reservations) > 0)
                    @foreach ($reservations as $key => $r)
                        <div class="top bg-white drop-shadow-sm rounded-sm flex items-center gap-3 p-3">
                            <p>{{$key+1}}. </p>
                            <img src={{asset($r['image'])}} class="h-20 w-30">
                            <div class="detail flex flex-col gap-2">
                                <p class="font-bold">{{$r['type']}}</p>
                                <p>Dipesan pada: {{$date_detail[$key]}}</p>
                            </div>
                        </div>
                    @endforeach
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