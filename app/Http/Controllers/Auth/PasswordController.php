<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        dd($request->all());
        /* $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]); */
        $rules = [
            'current_password' => [
                'required','string', Rule::unique('users')->ignore(auth()->id())
            ],
            'password' => [
                'required','string', Rule::unique('users')->ignore(auth()->id())
            ],
            'confirmPassword' => [
                'required','string', Rule::unique('users')->ignore(auth()->id())
            ]
        ];

        $validator = Validator::make($request->all(), $rules);

        dd($validator);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}
