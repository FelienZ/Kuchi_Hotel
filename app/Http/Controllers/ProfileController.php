<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $info = $request->user()->showReservations()->with('showRoom')->latest()->get()->toArray();
        $item = [];
        $date_data = [];
        foreach($info as $key => $r):
            $item[$key] = $r['show_room'];
            $date_data[$key] = Carbon::parse($r['created_at'])->format(' d M Y');
        endforeach;
        $data = [
            'title' => 'Profile Page',
            'user' => $request->user()->toArray(),
            'reservations' => $item,
            'date_detail' => $date_data
        ];
        // dd($data['user']);
        return view('pages.profilepage', $data);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    {   
        //harus tembus rules updaterequestny dulu
        $request->user()->fill($request->validated());
        $rules = [
            'name' =>  [
                'required','string', Rule::unique('users')->ignore(auth()->id())
            ],
            'email' => [
                'required','email', Rule::unique('users')->ignore(auth()->id())
            ]
        ];
        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::route('profile.edit')->with('error', 'Gagal Update Profile');
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        

        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Update Profile Berhasil');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
