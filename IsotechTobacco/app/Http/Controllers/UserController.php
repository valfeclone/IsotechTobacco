<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleRegister(Request $req)
    {
        $credentials = $req->only('name', 'email', 'password');
        $newAdmin = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);
        return "Success";
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        $remember = $req->has('remember_me') ? true : false;
        // dd($credentials);
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $remember)) {
            return redirect('index');
        } else {
            return $credentials;
        }
    }

}