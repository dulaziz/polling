<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $googleUser = Socialite::driver('google')->stateless()->user();

            // dd($googleUser);

            // Update atau create data login google
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ],[
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);

            // dd($user);

            Auth::login($user);

            return redirect()->back();

        }catch(\Throwable $th){
           return redirect('google.login');
        }
    }

    public function logout(){
            Auth::guard('web')->logout();
            session()->flush();
            return redirect('/');
    }

}

