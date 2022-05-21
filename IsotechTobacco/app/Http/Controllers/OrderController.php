<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ShippingFee;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Collection;
use PDF;

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
            'totalTagihan' => $req['totalTagihan'],
            'statusBayar' => false,
            'catatan' => $req['catatan'],
            'ongkir' => $req['ongkir'],
            'idTransaksiOy' => null,
            'user_id' => $user['id'],
            'statusTransaksi' => 'belum dibayar'
        ]);
        // $txID = ($user['id']).($newOrder['id'])."-".($newOrder['totalTagihan'])."-".$user['nomor_telpon'];
        // $newOrder['idTransaksiOy'] = $txID;
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
        return redirect('view-order');
    }

    public function payOrder(Request $req){
        $user = Auth::user();
        $select = Order::where('id', $req['order_id']) //get all for user ID. Filter through front end @dharma
        // ->where('order_id', null)
                    ->get();
        
        if($select){
            $response = PaymentController::makePayment($senderName = $user['name'], $amount = $req['totalTagihan'], $email = $user['email'], $phoneNumber = $user['nomor_telpon']);
            $select['idTransaksiOy'] = $response['payment_link_id'];
            $select->save();
        }
        
        return redirect($response['url']);
    }

    public function viewCheckout(Request $req)
    {
        $user = Auth::user();
        $city = ShippingFee::where('tujuan', $user['kota'])->get();
        $ongkir = $city[0]['harga'];
        $cart = Cart::where('user_id', $user['id'])
                        ->where('order_id', null)
                        ->get();
        // if($req){
        //     $ongkir = ShippingFee::where('tujuan', $req['tujuan'])->get();
        // }
        // else{
        //     $ongkir = ShippingFee::where('tujuan', $user['kota'])->get();
        // }

        return view('usernew/checkout-shop')->with('items', [
            'user' => $user,
            'cart' => $cart,
            'ongkir' => $ongkir
        ]);
    }

    public function viewOrder()
    {
        $user = Auth::user();
        $select = Order::where('user_id', $user['id']) //get all for user ID. Filter through front end @dharma
                        // ->where('order_id', null)
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        foreach ($select as $TO) {
            if($TO->idTransaksiOy != null){
                $response = PaymentController::getPaymentStatus($partnerTxId = $TO->idTransaksiOy);
                $status = ($response->json($key = 'data')['status']);
                if($status == 'created'){
                    $TO->statusTransaksi = 'belum dibayar';
                    $TO->save();
                }
                else if($status == 'expired'){
                    $TO->statusTransaksi = 'pembayaran gagal';
                    $TO->save();
                }
                else if($status == 'complete'){
                    if($TO->foto_bukti_pengiriman){
                        $TO->statusTransaksi = 'dalam pengiriman';
                        $TO->save();  
                    }
                    else{
                        $TO->statusTransaksi = 'sedang diproses';
                        $TO->statusBayar = true;
                        $TO->save();
                    }
                }
            }
        }

        $cart = Cart::where('user_id', $user['id'])
                        ->get();

        // dd($cart[1]->product->product_image_path);

        // dd($cart, $select, $cart[0]->product->title);
        return view ('usernew/order')->with('items',[
            'order' => $select,
            'cart' => $cart
        ]);
    }

    public function viewDetailOrder(Request $request)
    {
        $user = Auth::user();

        $city = ShippingFee::where('tujuan', $user['kota'])->get();
        $ongkir = $city[0]['harga'];

        $idOrder = $request->route('id');
        
        $select = Order::where('id', $idOrder)
                        // ->where('order_id', null)
                        ->first();

        $cart = Cart::where('user_id', $user['id'])
                        ->where('order_id', $select->id)
                        ->get();

        if($select->idTransaksiOy != null){
            $response = PaymentController::getPaymentStatus($partnerTxId = $select->idTransaksiOy);
            $status = ($response->json($key = 'data')['status']);
            if($status == 'created'){
                $select->statusTransaksi = 'belum dibayar';
                $select->save();
            }
            else if($status == 'complete'){
                $select->statusTransaksi = 'sedang diproses';
                $select->statusBayar = true;
                $select->save();
            }
            else if($status == 'expired'){
                $select->statusTransaksi = 'pembayaran expired';
                $select->save();
            }
        }

        // dd($select);
        
        return view ('usernew/order-detail')->with('items',[
            'order' => $select,
            'cart' => $cart,
            'ongkir' => $ongkir
        ]);
    }

    public function viewDetailOrderAdmin(Request $request)
    {
        $user = Auth::user();

        $idOrder = $request->route('id');
        
        $select = Order::where('id', $idOrder)
                        // ->where('order_id', null)
                        ->get();

        // dd($select[0]);

        $buyer = User::where('id', $select[0]->user_id)->get();
        // dd($buyer);
        
        
        $cart = Cart::where('user_id', $buyer[0]->id)
                        ->where('order_id', $select[0]->id)
                        ->get();
        // dd($cart);
        return view ('adminnew/order-detail')->with('items',[
            'order' => $select,
            'carts' => $cart,
            'buyer' => $buyer,
            'orderId' => $idOrder
        ]);
    }

    public function viewInvoice(Request $request)
    {

        $idOrder = $request->route('id');
        // $idOrder = 1;
        
        $select = Order::where('id', $idOrder)->get();
        $buyer = User::where('id', $select[0]->user_id)->get();
        
        $cart = Cart::where('user_id', $buyer[0]->id)
                        ->where('order_id', $select[0]->id)
                        ->get();
        // dd($cart);

        return view ('adminnew/invoice')->with('items',[
            'order' => $select,
            'carts' => $cart,
            'buyer' => $buyer
        ]);
    }

    public function viewPDFInvoice(Request $req)
    {
        $idOrder = $req->route('id');
        $order = Order::where('id', $idOrder)->get();

        $buyer = User::where('id', $order[0]->user_id)->get();

        $carts = Cart::where('user_id', $buyer[0]->id)
            ->where('order_id', $order[0]->id)
            ->get();

        $items = array('order' => $order,
                        'carts' => $carts,
                        'buyer' => $buyer);
                        

        $pdf = PDF::loadView('adminnew/invoice', compact('items'))->save($order[0]->idTransaksiOy.".pdf");
        $path = storage_path('app/public/pdf_invoice');
        $pdf->move($path, str_replace(' ', '', $order[0]->idTransaksiOy));
        return $pdf->download($order[0]->idTransaksiOy.".pdf");
    }

    public function viewAllOrder(Request $request)
    {
        $search = $request->status;

        if($search == null){
            $select = Order::latest()->get();
        }

        $select = Order::where('statusTransaksi', 'like', '%'.$search.'%')->get();

        foreach ($select as $TO) {
            if($TO->idTransaksiOy != null){
                $response = PaymentController::getPaymentStatus($partnerTxId = $TO->idTransaksiOy);
                $status = ($response->json($key = 'data')['status']);
                if($status == 'created'){
                    $TO->statusTransaksi = 'belum dibayar';
                    $TO->save();
                }
                else if($status == 'expired'){
                    $TO->statusTransaksi = 'pembayaran gagal';
                    $TO->save();
                }
                else if($status == 'complete'){
                    if($TO->foto_bukti_pengiriman){
                        $TO->statusTransaksi = 'dalam pengiriman';
                        $TO->save();  
                    }
                    else{
                        $TO->statusTransaksi = 'sedang diproses';
                        $TO->statusBayar = true;
                        $TO->save();
                    }
                }
            }
        }

        return view ('adminnew/order-lists')->with('orders', $select);
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

    public function uploadBuktiPengiriman(Request $req){
        if($req){
            $order = Order::where('id', $req['order_id'])->first();
            $file = $req->file('bukti_pengiriman');
            $path = storage_path('app/public/bukti_pengiriman');
            $file->move($path, str_replace(' ', '', $order->idTransaksiOy));

            $order->foto_bukti_pengiriman = str_replace(' ', '', $order->idTransaksiOy);
            $order->statusTransaksi = 'dalam pengiriman';
            $order->save();
        }
        return redirect()->back();
    }
}
