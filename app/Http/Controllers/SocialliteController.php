<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class SocialliteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            // dd($user);
            // die;
            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => encrypt('my-google'),
                    'status' => 'user'
                ]);

                Auth::login($newUser);

                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
