<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

</head>
<body>
    <main class="flex f flex-col min-h-screen font-[Poppins] bg-white text-black w-screen">
        @include('layout.navbar')
            <div class="content mt-20 mb-2">
                @yield('content')
            </div>
        @include('layout.footer')
    </main>
    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
        <div class="modal" role="dialog">
        <form action={{route('profile.update')}} method="post" class="modal-box bg-white text-neutral flex flex-col gap-5">
            @csrf
            @method('PATCH')
            <h2 class="text-lg font-bold text-center">Edit Your Profile</h2>
            <div class="inputColumn flex flex-col gap-3 text-sm">
                <div class="name flex flex-col gap-1">
                    <p>Enter New Name: </p>
                    <input type="text" name="name" value={{auth()->user()->name}}  class="input bg-white text-neutral border-neutral border w-full" placeholder="Enter New Username?">
                </div>
                <div class="name flex flex-col gap-1">
                    <p>Enter New Email: </p>
                    <input type="email" name="email" value={{auth()->user()->email}} class="input bg-white text-neutral border-neutral border w-full" placeholder="Enter New Email?">
                </div>
            </div>
            <button type="submit" class="btn bg-blue-900 border-none">Submit</button>
        </form>
        <label class="modal-backdrop" for="my_modal_7">Close</label>
    </div>
    <script src="{{ asset('/Scripts/script.js') }}"></script>
</body>
</html>