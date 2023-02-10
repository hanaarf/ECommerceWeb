<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email',$google_user->email)->first();
            if($user){
                Auth::login($user);
                return redirect('/kitkat');
            }else{
                $new_user = User::create([
                    'name' => ucwords($google_user->name),
                    'email' => $google_user->email,
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                ]);

                Auth::login($new_user);
                return redirect('/kitkat');
            }
        } catch (\Throwable $th) {
            abort(404);
        }    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

