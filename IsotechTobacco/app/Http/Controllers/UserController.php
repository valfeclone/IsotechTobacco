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
        $credentials = $req->only('name', 'email', 'password','alamat', 'kota', 'nomor_telpon', 'kodepos', 'provinsi', 'kecamatan', 'kelurahan_desa');
        $newUser = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'alamat' => $credentials['alamat'],
            'provinsi' => $credentials['provinsi'],
            'kota' => $credentials['kota'],
            'kecamatan' => $credentials['kecamatan'],
            'kelurahan' => $credentials['kelurahan_desa'],
            'nomor_telpon' => $credentials['nomor_telpon'],
            'kodepos' => $credentials['kodepos'],
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
            return redirect()->back()->withErrors(['msg' => 'Wrong email or password']);
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
        $credentials = $req->only('name', 'email', 'password','alamat', 'kota', 'nomor_telpon', 'kodepos', 'provinsi', 'kecamatan', 'kelurahan_desa');
        
        // dd($user['name']);
        if($user){
            $user['name'] = $credentials['name'];
            $user['email'] = $credentials['email'];
            $user['password'] = bcrypt($credentials['password']);
            $user['alamat'] = $credentials['alamat'];
            $user['provinsi'] = $credentials['provinsi'];
            $user['kecamatan'] = $credentials['kecamatan'];
            $user['kelurahan'] = $credentials['kelurahan_desa'];
            $user['kota'] = $credentials['kota'];
            $user['nomor_telpon'] = $credentials['nomor_telpon'];
            $user['kodepos'] = $credentials['kodepos'];
        }
        $user->save();
        $select = Product::all();
        return redirect('/index')->with('items',$select);
    }

    public function updateAddress(Request $req)
    {
        $user = Auth::user();
        $credentials = $req->only('alamat', 'kota', 'nomor_telpon', 'kodepos');
        
        // dd($user['name']);
        if($user){
            $user['alamat'] = $credentials['alamat'];
            $user['kota'] = $credentials['kota'];
            $user['nomor_telpon'] = $credentials['nomor_telpon'];
            $user['kodepos'] = $credentials['kodepos'];
        }
        $user->save();
        return redirect()->back();

    }

    public function getProfil()
    {
        $user = Auth::user();
        return view ('usernew/profile')->with('items', $user);
    }

    public function getUpdateProfil()
    {
        $user = Auth::user();
        // dd($user->id);
        return view ('usernew/update-profile')->with('items', $user);
    }
    public function getUserProfile()
    {
        $user = Auth::user();
        return json_encode($user);
        dd($user->id);

        // return view ('usernew/update-profile')->with('items', $user);
    }
}