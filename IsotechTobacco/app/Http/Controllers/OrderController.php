<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Controllers\PaymentController;

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
        $response = PaymentController::makePayment($senderName = $user['name'], $amount = $req['totalTagihan'], $email = $user['email'], $phoneNumber = $user['nomor_telpon']);
        if($response['payment_link_id']){
            $newOrder = Order::create([
                'totalTagihan' => $req['totalTagihan'],
                'statusBayar' => false,
                'idTransaksiOy' => $response['payment_link_id'],
                'user_id' => $user['id'],
                'statusTransaksi' => 'belum dibayar'
            ]);
            $newOrder->save();

            $cart = Cart::where('user_id', $user['id'])
                            ->where('order_id', null)
                            ->get();

            // dd(sizeof($cart));
            if($cart){
                for ($i=0; $i < sizeof($cart); $i++) { 
                    $cart[$i]->order_id = $newOrder['id'];
                    $cart[$i]->save();
                }
            }

            return redirect($response['url']);
        }
    }

    public function viewOrder()
    {
        $user = Auth::user();
        $select = Order::where('user_id', $user['id']) //get all for user ID. Filter through front end @dharma
                        // ->where('order_id', null)
                        ->get();
        
        $cart = Cart::where('user_id', $user['id'])
                        ->get();

        // dd($select, $cart);
        return view ('usernew/order')->with('items',[
            'order' => $select,
            'cart' => $cart
        ]);
    }

    public function viewAllOrder()
    {
        // $user = Auth::user();
        $select = Order::all();
        return view ('adminnew/order-lists')->with('orders',$select);
    }

    public function updateStatusOrder(Request $req)
    {
        $user = Auth::user();
        $order = Order::where('id', $req['order_id'])
                        ->first();

        // dd($req['statusTransaksi'], $order->statusTransaksi);
        if($order){
            if($order->statusTransaksi =='belum dibayar'){
                $order->statusTransaksi  = $req['statusTransaksi'];
                // if($req['idTransaksiOy']){
                //     $order['idTransaksiOy'] = $req['idTransaksiOy'];
                // }
            }
            else if($order->statusTransaksi =='belum diproses'){
                $order->statusTransaksi  = $req['statusTransaksi'];
            }
            else if($order->statusTransaksi =='sudah diproses'){
                $order->statusTransaksi  = $req['statusTransaksi'];
            }
        }
        $order->save();
        return redirect()->back();
    }

    public function deleteOrder($id)
    {
        // dd($req);
        $res = Order::find($id)->delete();
        // return redirect('admin/view-product');
    }

    public function getTarif(Request $req)
    {
        $tarif = ShippingFee::where('alamat', $req['alamat'])->get();
        return $tarif;
    }
}
