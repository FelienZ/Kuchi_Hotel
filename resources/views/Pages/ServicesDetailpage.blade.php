@extends('layout.template')
@section('content')
<section class="min-h-screen bg-white place-content-center place-items-center">
    <div class="flex flex-col md:w-[50%] bg-white drop-shadow-md gap-3 p-4">
        <p class="font-bold sm:text-xl text-center text-blue-900">{{$title}}</p>
        <img src={{asset($facility['image'])}} alt="" class="w-full">
        <div class="information flex flex-col items-center my-5">
            <p class="font-bold max-sm:text-sm">{{$facility['service']}}</p>
            <p class="text-justify max-sm:text-sm">{{$facility['descriptions']}}</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="flex items-center gap-3 max-sm:text-sm"> Operational: {{$facility['open']}} - {{$facility['closed']}}</p>
            <p class=" {{$facility['status'] == 'open' ? 'badge-success' : 'badge-error'}} badge badge-outline">{{$facility['status']}}</p>
        </div>
    </div>
</section>
@endsection