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
        $credentials = $req->only('name', 'email', 'password');
        $newUser = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);
        if (Auth::login($newUser)) {
            $select = Product::all();
            return redirect('/view-product')->with('items',$select);
        }
        return redirect('/view-product');
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        $remember = $req->has('remember_me') ? true : false;
        // dd($credentials);
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $remember)) {
            $select = Product::all();
            return redirect('/view-product')->with('items',$select);
        } else {
            return back()->withErrors(['msg' => 'Wrong email or password']);
        }
    }

}