<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        // Check if the user already exists
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // Log the user in
            Auth::login($existingUser, true);
        } else {
            // Create a new user
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->google_id = $user->getId();
            $newUser->avatar = $user->getAvatar();
            $newUser->save();

            Auth::login($newUser, true);
        }

        return redirect()->route('root');
    }
}
