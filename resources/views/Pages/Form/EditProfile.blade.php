@if (auth()->user())
    <input type="checkbox" id="modal_profile" class="modal-toggle" />
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
        <label class="modal-backdrop" for="modal_profile">Close</label>
    </div> 
@endif