@if (auth()->user())
    <input type="checkbox" id="modal_password" class="modal-toggle" />
        <div class="modal" role="dialog">
        <form action={{route('password.update')}} method="post" class="modal-box bg-white text-neutral flex flex-col gap-5">
            @csrf
            @method('PUT')
            <h2 class="text-lg font-bold text-center">Edit Your Password</h2>
            <div class="inputColumn flex flex-col gap-3 text-sm">
                <div class="current flex flex-col gap-1">
                    <p>Current Password: </p>
                    <input type="password" name="current_password" class="input bg-white text-neutral border-neutral border w-full" placeholder="Enter Your Current Password">
                    @error('current_password', 'updatePassword')
                        <div class="text-error text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="new flex flex-col gap-1">
                    <p>Enter New Password: </p>
                    <input type="password" name="password" class="input bg-white text-neutral border-neutral border w-full" placeholder="Enter New Password?">
                    @error('password', 'updatePassword')
                        <div class="text-error text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="confirm flex flex-col gap-1">
                    <p>Confirm New Password: </p>
                    <input type="password" name="password_confirmation" class="input bg-white text-neutral border-neutral border w-full" placeholder="Confirm New Password">
                    @error('password_confirmation', 'updatePassword')
                        <div class="text-error text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn bg-blue-900 border-none">Submit</button>
        </form>
        <label class="modal-backdrop" for="modal_password">Close</label>
    </div> 
@endif