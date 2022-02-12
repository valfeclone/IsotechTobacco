<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */

    public function createCart(Request $req)
    {  
        $user = Auth::user();
        $id = $user['id'];
        $prodID = $req['product_id']; 
        $checkExist = Cart::where('user_id', $id)
            ->where('product_id', $prodID)
            ->first();
        // dd($prodID, $id);
        if($checkExist){
            $checkExist->jumlahPesan = $checkExist->jumlahPesan+1;
            $checkExist->save();
        }
        else{
            $newProduct = Cart::create([
                'product_id' => $req['product_id'],
                'jumlahPesan' => $req['jumlahPesan'],
                'user_id' => $user['id'],
                'order_id' => NULL,
            ]);
            $newProduct->save();
        }

        return redirect()->back();
    }

    public function viewCart()
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user['id'])
                        ->where('order_id', null)
                        ->get();
        return view ('user/shop-cart')->with('carts',$cart);
    }

    public function updateCart(Request $req)
    {
        // dd($req);
        $id = $req['product_id'];
        $user = Auth::user();
        $product = Cart::where('user_id', $user['id'])
                        ->where('product_id', $req['product_id'])
                        ->where('order_id', null)
                        ->get();
        if($product){
            $product['jumlahPesan'] = $req['jumlahPesan'];
        }
        $product->save();

        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $res = Cart::find($id)->delete();
        return redirect()->back();
    }
}
