<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShippingFee;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Collection;
use PDF;
use Carbon\Carbon;
use App\Http\Controllers\OngkirController;

class OrderController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */

     public function createOrderJet(Request $req)
     {
        $user = Auth::user();

        $key = env('ORDERKEY');
        // $data = array
        // (
        // 'username'=> env('ORDERUSERNAME'),
        // 'api_key'=> env('ORDERAPIKEY'),
        // 'orderid'=>'ORDERID-GONDRONGTEST-ZR931',
        // 'shipper_name'=>'Gondrong Tobacco',
        // 'shipper_contact'=>'Mas Salman',
        // 'shipper_phone'=> '+628123456789',
        // 'shipper_addr'=>'JL. Pengirim no.88, RT/RW:001/010, Pluit',
        // 'origin_code'=>'JKT',
        // 'receiver_name'=>$user['name'],
        // 'receiver_phone'=>$user['nomor_telpon'],
        // 'receiver_addr'=>$user['alamat'],     
        // 'receiver_zip'=>'40123',
        // 'destination_code'=>'JKT',
        // 'receiver_area'=>'JKT001',
        // 'qty'=>'1',
        // 'weight'=>'1',
        // 'goodsdesc'=>'TESTING!!',
        // 'servicetype'=>'1',
        // 'insurance'=>'122',
        // 'orderdate'=>'2021-08-01 22:02:00',
        // 'item_name'=>'topi',
        // 'cod'=>'120000',
        // 'sendstarttime'=>'2021-08-01 08:00:00',
        // 'sendendtime'=>'2021-08-01 22:00:00',
        // 'expresstype'=>'1',
        // 'goodsvalue'=>'1000',
        // );
        $data = array
        (
        'username'=> 'GONDRONGTOBACCO',
        'api_key'=> 'QXRQI4',
        'orderid'=>'ORDERID-GONDRONGTEST-ZR931',
        'shipper_name'=>'Gondrong Tobacco',
        'shipper_contact'=>'Mas Salman',
        'shipper_phone'=> '+628123456789',
        'shipper_addr'=>'JL. Pengirim no.88, RT/RW:001/010, Pluit',
        'origin_code'=>'JKT',
        'receiver_name'=>'Fadhlan',
        'receiver_phone'=>'08111222333',
        'receiver_addr'=>'Jalan Maluku',     
        'receiver_zip'=>'40123',
        'destination_code'=>'JKT',
        'receiver_area'=>'JKT001',
        'qty'=>'1',
        'weight'=>'1',
        'goodsdesc'=>'TESTING!!',
        'servicetype'=>'1',
        'insurance'=>'122',
        'orderdate'=>'2021-08-01 22:02:00',
        'item_name'=>'topi',
        'cod'=>'120000',
        'sendstarttime'=>'2021-08-01 08:00:00',
        'sendendtime'=>'2021-08-01 22:00:00',
        'expresstype'=>'1',
        'goodsvalue'=>'1000',
        );

        $data_json = json_encode(array('detail'=>array($data)));
        $data_sign = base64_encode(md5($data_json.$key));

        $data_request = array
        (
        'data_param'=>$data_json,
        'data_sign'=> $data_sign
        );
        // echo($data_json);
        dd($data_json, $data_sign);

        // dd($data_json);
        // dd($data_sign);


        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
          ])->post('https://test-jk.jet.co.id/jts-idn-ecommerce-api/api/order/create', [
            'data_param'=> $data_json,
            'data_sign'=> $data_sign,
        ]);

        dd($response);
     }

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
        // $city = ShippingFee::where('tujuan', $user['kota'])->get();
        $response = OngkirController::getShippingFee($user['kota']);
        $ongkir = ($response->json($key = 'content'));
        $ongkir = (json_decode($ongkir));
        $ongkir = ($ongkir[0]->cost);
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
                        if($TO->statusTransaksi !== 'sudah selesai'){
                            $TO->statusTransaksi = 'dalam pengiriman';
                            $TO->save();  
                        }
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

        return view ('usernew/order')->with('items',[
            'order' => $select,
            'cart' => $cart
        ]);
    }

    public function viewDetailOrder(Request $request)
    {
        $user = Auth::user();
        $response = OngkirController::getShippingFee($user['kota']);
        $ongkir = ($response->json($key = 'content'));
        $ongkir = (json_decode($ongkir));
        $ongkir = ($ongkir[0]->cost);

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
            else if($status == 'expired'){
                $select->statusTransaksi = 'pembayaran gagal';
                $select->save();
            }
            else if($status == 'complete'){
                if($select->foto_bukti_pengiriman){
                    if($select->statusTransaksi !== 'sudah selesai'){
                        $select->statusTransaksi = 'dalam pengiriman';
                        $select->save();  
                    }
                }
                else{
                    $select->statusTransaksi = 'sedang diproses';
                    $select->statusBayar = true;
                    $select->save();
                }
            }
        }

        // dd($select);
        
        return view ('usernew/order-detail')->with('items',[
            'order' => $select,
            'cart' => $cart,
            'ongkir' => $ongkir
        ]);
    }

    public function viewBuktiUpload(Request $request)
    {
        $user = Auth::user();

        $idOrder = $request->route('id');
        
        $select = Order::where('id', $idOrder)
                        // ->where('order_id', null)
                        ->first();
        
        return view('adminnew/shipping-upload')->with('order', $select);
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
                        if($TO->statusTransaksi !== 'sudah selesai'){
                            $TO->statusTransaksi = 'dalam pengiriman';
                            $TO->save();  
                        }
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

    public function selesaikanOrder(Request $req){
        $user = Auth::user();
        $order = Order::where('id', $req['order_id'])
                        ->first();
        $order->statusTransaksi = 'sudah selesai';
        $order->save();
        return redirect()->back();        
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
            else if($order->statusTransaksi =='sudah selesai'){
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

        $path = storage_path('app/public/pdf_invoice/');
        $pdf = PDF::loadView('adminnew/invoice', compact('items'));
        $pdf->save($path.$order[0]->idTransaksiOy.".pdf");
        // $pdf->save($path, str_replace(' ', '', $order[0]->idTransaksiOy));
        return $pdf->download($order[0]->idTransaksiOy.".pdf");
    }
        
    public function getKodeJNT($kelurahan, $kecamatan, $kota){
        $res = Kodewilayah::where('KELURAHAN_DESA', $kelurahan)
            ->where('KECAMATAN', $kecamatan)
            ->where('KAB_KOTA', $kota);
        return ($res);
    }

    public function makeDelivery(Request $req){
        #akses ini dari admin ya. variable nya diakses di samping list order.
        $orderID = $req['order_id'];
        $order = Order::where('id', $orderID)->first();
        $user = User::where('id', $order['user_id'])->first();
        $kodeJNT = getKodeJNT($user['kelurahan'], $user['kecamatan'], $user['kota']);
        $carts = Cart::where('user_id', $user->id)
            ->where('order_id', $order->id)
            ->get();
        
        $qty = 0;
        $namaproduk = "";
        $weight = 0;
        for($i = 0; $i < sizeof($carts); $i++){
            $qty = $qty + $carts[$i]['jumlahPesan'];
            $product = Product::where('id', $carts[$i]['product_id'])->first();
            $namaproduk = $namaproduk.$product['title'].", ";
            $weight = $weight + $product['weight'];
        }

        $startTime = date('Y-m-d H:i:s');
        $endTime = date('Y-m-d H:i:s', strtotime('+1 day'));
        $timestamp = $order['created_at'];
        $orderDate = Carbon::parse($timestamp)->format('Y-m-d H:i:s');

        $key = env('ORDERKEY');
        $data = array(
           'username'=>env('ORDERUSERNAME'),
           'api_key'=>env('ORDERAPIKEY'),
           'orderid'=>substr($order['idTransaksiOy'], 0, 20),#max nya 20 soalnya
           'shipper_name'=>'Gondrong Tobacco',
           'shipper_contact'=>'gondrongtobacco@gmail.com',
           'shipper_phone'=> '+628123456789',
           'shipper_addr'=>'JL. Pengirim no.88, RT/RW:001/010, Pluit',
           'origin_code'=>'JKT',
           'receiver_name'=> $user['name'],
           'receiver_phone'=> $user['nomor_telpon'],
           'receiver_addr'=> substr($user['alamat'], 0, 200),    
           'receiver_zip'=> $user['kodepos'],
           'destination_code'=>$kodeJNT['KODE KOTA JNT'],
           'receiver_area'=>$kodeJNT['KODE'],
           'qty'=>strval($qty),
           'weight'=>strval($weight),
           'goodsdesc'=>strval($order['catatan']),#shud be order notes
           'servicetype'=>'1',
        //    'insurance'=>'', #nullable tapi harus gini
           'orderdate'=>strval($orderDate),
           'item_name'=>'topi',#ini harusnya yang mana? kalo kosong boleh?
        //    'cod'=>'',
           'sendstarttime'=>strval($startTime),#Start pickup range time? Time nyatime server
           'sendendtime'=>strval($endTime),#Start pickup range time
           'expresstype'=>'1',#reguler
           'goodsvalue'=>strval($order['totalTagihan'])
        );
        
        $data_json = json_encode(array('detail'=>array($data))); #masih kesalahan signature
        $data_sign = base64_encode(md5($data_json.$key));

        $resp =  Http::asForm([
            'Content-Type' => 'application/x-www-form-urlencoded',
          ])->post("https://test-jk.jet.co.id/jts-idn-ecommerce-api/api/order/create", [
            'data_param' => $data_json,
            'data_sign' => $data_sign,
        ]);

        $response = ($resp->json($key = 'detail'));
        dd($response);

        if ($response[0]['reason'] == "Orderid tidak boleh sama"){
            $order['awb_pengiriman'] = $response[0]['awb_no'];
            $order->save();
            return redirect()->back();
        }
        else{
            $order['awb_pengiriman'] = $response[0]['awb_no'];
            $order->save();
            return redirect()->back();
        }
    }

    public function checkDelivery(Request $req){
        $order = Order::find($req['order_id']);
        $awb = $order['awb_pengiriman'];

        $data = array(
           'awb'=>$awb,
           'eccompanyid'=>env("ECCOMPANYID")
        );

        $resp =  Http::withBasicAuth(env("ECCOMPANYID"), env("TRACKKEY"))->post("http://test-jk.jet.co.id/jandt-order-ifd-web/track/trackAction!tracking.action", $data);

        $responsedetail = ($resp->json($key = 'detail'));
        $responsehistory = ($resp->json($key = 'history'));
        dd($responsehistory);
        
        return redirect()->back();
    }

    public function checkStatusDelivery(){
        // return view ('usernew/status-pengiriman')->with('orders', $select);
        $statusArray = array(
            array(  
                "date_time" => "2022-07-05 20:00:58",
                "status_code" => 101,
                "status" => "Manifes"
            ),
            array(  
                "date_time" => "2022-08-05 20:00:58",
                "status_code" => 100,
                "status" => "Paket akan dikirimkan ke xxxxxxx"
            ),
            array(  
                "date_time" => "2022-09-05 20:00:58",
                "status_code" => 100,
                "status" => "Paket telah sampai di xxxxxxxx"
            ),
            array(  
                "date_time" => "2022-10-05 20:00:58",
                "status_code" => 100,
                "status" => "Paket akan dikirim ke alamat penerima"
            )
        );

        return view ('usernew/status-pengiriman')->with('tracks', $statusArray);;
    }

    public function cetakLogTransaksi(){
        $endDate =  date('Y-m-d H:i:s');
        $startDate =  date(('Y-m-d H:i:s'), strtotime('-1 month'));
        $order = Order::whereBetween('created_at', [$startDate, $endDate])->get();

        // dd($order);
        $final = [];
        foreach ($order as $or){
            $cart = Cart::where('order_id', $or->id)->get();
            $array = [];
            array_push($array, $or);
            foreach ($cart as $c){
                $produk = Product::where('id', $c->product_id)->first();
                // $c->product_id = $produk->title;
                array_push($array, $c);
                array_push($array, $produk);
            }
            array_push($final, $array);
        }

        // dd($final);
        return view('admin/logtransaksi')->with('items', $final);
    }
}
