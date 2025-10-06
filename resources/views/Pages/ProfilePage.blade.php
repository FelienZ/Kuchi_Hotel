@extends('layout.template')
@section('content')
    <section class="min-h-screen place-content-center place-items-center">
        <div class="flex flex-col bg-white drop-shadow-sm min-h-screen gap-3 my-5 md:w-[60%] p-4 rounded-sm">
            <div class="profile grid md:grid-cols-[auto_1fr] gap-3 border place-content-center p-3">
                <img src={{asset('images/user.png')}} alt="" class="max-md:size-40 md:size-60">
                <div class=" flex flex-col justify-between gap-2 w-full p-2">
                    <p class="font-semibold">Your Name:</p>
                    <input type="text" disabled value={{$user['name']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <p class="font-semibold">Your Email:</p>
                    <input type="email" disabled value={{$user['email']}} class="input disabled:text-neutral w-full disabled:bg-transparent">
                    <a href="" class="btn btn-warning w-fit self-end text-white">Edit<i class="fa-solid fa-edit"></i></a>
                </div>
            </div>
            <div class="reservations border p-3 flex flex-col gap-3">
                <p class="font-semibold">Daftar Reservasi</p>
            </div>
        </div>
    </section>
@endsection