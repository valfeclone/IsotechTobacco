<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;

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
        if (Auth::guard('admin')->attempt($credentials)) {
            $select = Product::all();
            return redirect('/admin/view-product')->with('items',$select);
        }
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->only('email', 'password');
        // $credentials['password'] = bcrypt($credentials['password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            $select = Product::all();
            return redirect('/admin/view-product')->with('items',$select);
        } else {
            return back()->withErrors(['msg' => 'Wrong email or password']);
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}