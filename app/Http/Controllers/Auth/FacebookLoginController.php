<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Avatar;
use File;


class FacebookLoginController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/dashboard');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('')
                ]);

                $dir = storage_path() . "/app/public/avatars/{$createUser->id}/";
                File::makeDirectory($dir);
        
                $file = "/avatars/{$createUser->id}/{$createUser->name}_avatar.png";
        
                Avatar::create($user->name)->save( "{$dir}{$createUser->name}_avatar.png", 100);
                $createUser->update(['avatar' => $file]);
    
                Auth::login($createUser);

                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
