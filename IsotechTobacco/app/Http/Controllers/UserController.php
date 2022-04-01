<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleRegister(Request $req)
    {
        $credentials = $req->only('name', 'email', 'password','alamat', 'kota', 'nomor_telpon');
        $newUser = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'alamat' => $credentials['alamat'],
            'kota' => $credentials['kota'],
            'nomor_telpon' => $credentials['nomor_telpon'],
        ]);
        Auth::login($newUser);
        $select = Product::all();
        return redirect('/index')->with('items',$select);
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        $remember = $req->has('remember_me') ? true : false;
        // dd($credentials);
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $remember)) {
            $select = Product::all();
            return redirect('/index')->with('items',$select);
        } else {
            return back()->withErrors(['msg' => 'Wrong email or password']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function updateProfil(Request $req)
    {
        $user = Auth::user();
        $credentials = $req->only('name', 'email', 'password','alamat', 'kota', 'nomor_telpon');
        
        // dd($user['name']);
        if($user){
            $user['name'] = $credentials['name'];
            $user['email'] = $credentials['email'];
            $user['password'] = bcrypt($credentials['password']);
            $user['alamat'] = $credentials['alamat'];
            $user['kota'] = $credentials['kota'];
            $user['nomor_telpon'] = $credentials['nomor_telpon'];
        }
        $user->save();
        $select = Product::all();
        return redirect('/index')->with('items',$select);
    }

    public function getProfil()
    {
        $user = Auth::user();
        return view ('usernew/profile')->with('items', $user);
    }

    public function getUpdateProfil()
    {
        $user = Auth::user();
        return view ('usernew/update-profile')->with('items', $user);
    }
}