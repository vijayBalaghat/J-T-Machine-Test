<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialLoginController extends Controller
{
    public function getFBuser()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function getFBCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            //  echo "<pre>";
            //  print_r($user);
            //  die;
            $finduser = User::where('fb_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                session()->put('facebook',$finduser->name);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => Hash::make('12345678'),
                ]);

                Auth::login($newUser);
                session()->put('facebook',$user->name);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


    // Google Login
    public function getGoogleuser()
    {
        return Socialite::driver('google')->redirect();
    }
    public function getGoogleCallback()
    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                session()->put('google',$finduser->name);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('12345678')
                ]);

                Auth::login($newUser);
                session()->put('google',$user->name);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
