<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
  public function index(){
    return'<h1>Login Controller</h1>';
  }


    public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try {
        $user = Socialite::driver('google')->user();
    } catch (\Exception $e) {
        return redirect('welcome');
    }

    // check if they're an existing user
    $existingUser = User::where('email', $user->email)->first();
    if($existingUser){
        // log them in
        auth()->login($existingUser, true);
    } else {
        // create a new user
        $newUser                  = new User;
        $newUser->name            = $user->name;
        $newUser->email           = $user->email;
        $newUser->google_id       = $user->id;
        $newUser->avatar          = $user->avatar;
        $newUser->avatar_original = $user->avatar_original;
        $newUser->save();
        auth()->login($newUser, true);
    }
    return redirect()->to('/dashboard');
}

}
