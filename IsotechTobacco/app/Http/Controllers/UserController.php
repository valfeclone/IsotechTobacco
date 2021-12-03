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
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::attempt($credentials)) {
            return "Sukses Login";
        } else {
            return $credentials;
        }
    }

}