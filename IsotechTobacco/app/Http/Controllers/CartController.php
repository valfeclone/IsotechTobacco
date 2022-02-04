<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        $checkExist = Carts::where('user_id', '{{ $id }}')
            ->where('product_id', '{{ $prodID }}')
            ->get();

        if($checkExist){
            $checkExist['jumlahPesan'] = $checkExist['jumlahPesan']+1;
            $checkExist->save();
        }
        else{
            $newProduct = Cart::create([
                'product_id' => $request['product_id'],
                'jumlahPesan' => $request['jumlahPesan'],
                'user_id' => $user['id'],
            ]);
            $newProduct->save();
        }
    }

    public function viewCart()
    {
        $user = Auth::user();
        $select = DB::table('carts')
                        ->where('user_id', $user['id'])
                        ->where('order_id', null)
                        ->get();

        // return view ('/shopping-cart')->with('items',$select);
    }

    public function updateCart(Request $req)
    {
        $id = $req['product_id'];
        $user = Auth::user();
        $product = DB::table('carts')
                        ->where('user_id', $user['id'])
                        ->where('product_id', $req['product_id'])
                        ->where('order_id', null)
                        ->get();
        if($product){
            $product['jumlahPesan'] = $req['jumlahPesan'];
        }
        $product->save();

        // return redirect()->route('viewproduct');
    }

    public function deleteCart($id)
    {
        // dd($req);
        $res = Cart::find($id)->delete();
        // return redirect('admin/view-product');
    }
}
