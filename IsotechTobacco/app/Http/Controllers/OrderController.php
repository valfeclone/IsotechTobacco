<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */

    public function createOrder(Request $req)
    {  
        $user = Auth::user();
        $newOrder = Order::create([
            'totalTagihan' => $request['totalTagihan'],
            'statusBayar' => false,
            'idTransaksiOy' => null,
            'user_id' => $user['id'],
            'statusTransaksi' => 'belum dibayar'
        ]);
        $newOrder->save();
    }

    public function viewOrder()
    {
        $user = Auth::user();
        $select = DB::table('orders')
                        ->where('user_id', $user['id']) //get all for user ID. Filter through front end @dharma
                        // ->where('order_id', null)
                        ->get();
        // return view ('/shopping-cart')->with('items',$select);
    }

    public function viewAllOrder()
    {
        $user = Auth::user();
        $select = Order::all();
        // return view ('/shopping-cart')->with('items',$select);
    }

    public function updateStatusOrder(Request $req)
    {
        $user = Auth::user();
        $order = DB::table('orders')
                        ->where('user_id', $user['id'])
                        ->get();
        if($order){
            if($order['statusTransaksi']=='belum dibayar'){
                $order['statusTransaksi'] = 'belum diproses';
                if($req['idTransaksiOy']){
                    $order['idTransaksiOy'] = $req['idTransaksiOy'];
                }
            }
            else if($order['statusTransaksi']=='belum diproses'){
                $order['statusTransaksi'] = 'sudah diproses';
            }
            else if($order['statusTransaksi']=='sudah diproses'){
                $order['statusTransaksi'] = 'sudah selesai';
            }
        }
        $product->save();
        // return redirect()->route('viewproduct');
    }

    public function deleteOrder($id)
    {
        // dd($req);
        $res = Order::find($id)->delete();
        // return redirect('admin/view-product');
    }
}
