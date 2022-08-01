<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        
        #handle duplicate email different entry case
        $finduser = User::where('email', $user->email)->first();
        
        if ($finduser){
            if($finduser->google_id){
                Auth::login($finduser);
                return redirect()->intended('index');
            }
            else{
                $finduser->google_id = $user->id;
                $finduser->save();
                Auth::login($finduser);
                return redirect()->intended('index');
            }
        }
        else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => bcrypt('google_dummy312')
            ]);
            Auth::login($newUser);
            return redirect()->intended('index');
        }
    }
}