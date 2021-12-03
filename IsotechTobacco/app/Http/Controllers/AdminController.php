<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleRegister(Request $req)
    {
        $credentials = $req->only('email', 'password');
        $newAdmin = Admin::create([
            'email' => $req['email'],
            'password' => bcrypt($req['password']),
        ]);
        return "Success";
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return "Sukses Login";
        } else {
            return $credentials;
        }
    }
}