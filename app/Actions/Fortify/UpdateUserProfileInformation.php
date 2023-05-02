<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            //  dd($input),
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone' => ['digits_between:8,15', 'nullable'],
            'bio' => ['max:255'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ])->validateWithBag('updateProfileInformation');
        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            if (request()->hasFile('image')) {
                Storage::delete('public/' . $user->image);
                $input['image'] = request()->file('image')->store('images', 'public');
            }
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'] ?? $user->phone,
                'bio' => $input['bio'] ?? $user->bio,
                'image' => $input['image'] ?? $user->image,
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        if (request()->hasFile('image')) {
                Storage::delete('public/' . $user->image);
                $input['image'] = request()->file('image')->store('images', 'public');
        }

        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}