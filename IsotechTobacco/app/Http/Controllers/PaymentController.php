<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Cart;
use App\Models\Order;

class PaymentController extends Controller
{

    public static function makePayment(
        Request $request,
    )
    {
            $user = Auth::user();
            $senderName = $user['name'];
            $email = $user['email'];
            $phoneNumber = $user['nomor_telpon'];

            $select = Order::where('id', $request['order_id'])
            // ->where('order_id', null)
                        ->first();

            // dd($select);
            $txID = ($user['id']).($select['id'])."-".($select['totalTagihan'])."-".$user['nomor_telpon'];
            if($select){
                $response = Http::withHeaders([
                    'x-oy-username' => 'gondrongtobacco19',
                    'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
                  ])->post("https://api-stg.oyindonesia.com/api/payment-checkout/create-v2", [
                    'partner_tx_id' => $txID,
                    'description' => "",
                    'notes' => "",
                    'sender_name' => $senderName,
                    'amount' => $select['totalTagihan'],
                    'email' => $email,
                    'phone_number' => $phoneNumber,
                    'is_open' => false,
                    'step' => 'input-amount',
                    'include_admin_fee' => false,
                    'list_disabled_payment_methods' => null,
                    'list_enabled_banks' => "002,008,009,013,022",
                    'list_enabled_ewallet' => "shopeepay_ewallet,dana_ewallet,linkaja_ewallet,ovo_ewallet",
                    'expiration' => null,
                    'due_date' => null,
                    'va_display_name' => null
                ]);
                $select['idTransaksiOy'] = $txID;
                $select->save();
                
                $url = PaymentController::getPaymentLink($req = $txID);
                // dd($url);
                $finalURL = 'https://pay-stg.oyindonesia.com/'.$url;
                return redirect($finalURL);
                // return redirect($response['url']);
            }
    }

    public static function getPaymentStatus(
        string $partnerTxId
    )
    {
        return Http::withHeaders([
            'x-oy-username' => 'gondrongtobacco19',
            'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
          ])->get("https://api-stg.oyindonesia.com/api/payment-checkout/status", [
            'partner_tx_id' => $partnerTxId,
            'send_callback' => false,
        ]);
    }

    public static function getPaymentLink(
        String $req
    )
    {
        // dd($req);
        $paymentLinkIdOrPartnerTrxId = $req;
    //    try {
            $url = Http::withHeaders([
                'x-oy-username' => 'gondrongtobacco19',
                'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
              ])->get("https://api-stg.oyindonesia.com/api/payment-checkout/$paymentLinkIdOrPartnerTrxId");

            return($url->json($key = 'data')['paymentLinkId']);

            // return redirect("https://api-stg.oyindonesia.com/api/payment-checkout/$url");
    //    } catch(\Exception $e) {
    //        throwException($e);
    //    }
    }
}