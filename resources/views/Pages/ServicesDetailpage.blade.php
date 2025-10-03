@extends('layout.template')
@section('content')
<section class="min-h-screen bg-white place-content-center place-items-center">
    <div class="flex flex-col w-[50%] bg-white drop-shadow-md gap-3 p-4">
        <p class="font-bold text-xl text-center text-blue-900">{{$title}}</p>
        <img src={{url($facility['image'])}} alt="" class="w-full">
        <div class="information flex flex-col items-center my-5">
            <p class="font-bold">{{$facility['service']}}</p>
            <p class="text-justify">{{$facility['descriptions']}}</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="flex items-center gap-3"> Operational: {{$facility['open']}} - {{$facility['closed']}}</p>
            <p class=" {{$facility['status'] == 'open' ? 'badge-success' : 'badge-error'}} badge badge-outline">{{$facility['status']}}</p>
        </div>
    </div>
</section>
@endsection