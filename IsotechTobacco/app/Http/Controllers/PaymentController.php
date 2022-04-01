<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{

    public static function makePayment(
        String $senderName,
        int $amount,
        String $email,
        String $phoneNumber,
    )
    {
       try {
            return Http::withHeaders([
                'x-oy-username' => 'gondrongtobacco19',
                'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
              ])->post("https://api-stg.oyindonesia.com/api/payment-checkout/create-v2", [
                'partner_trx_id' => null,
                'description' => "",
                'notes' => "",
                'sender_name' => $senderName,
                'amount' => $amount,
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
       } catch(\Exception $e) {
           throwException($e);
       }
    }

    public static function getPaymentStatus(
        string $partnerTrxId,
        bool $sendCallback = false,
    )
    {
       try {
            return Http::withHeaders([
                'x-oy-username' => 'gondrongtobacco19',
                'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
              ])->get("https://api-stg.oyindonesia.com/api/payment-checkout/status", [
                'partner_trx_id' => $partnerTrxId,
                'send_callback' => $sendCWllback,
            ]);
       } catch(\Exception $e) {
           throwException($e);
       }
    }

    public static function getPaymentLink(
        int $paymentLinkIdOrPartnerTrxId,
    )
    {
       try {
            return Http::withHeaders([
                'x-oy-username' => 'gondrongtobacco19',
                'x-api-key' => '6975a446-2f3d-4062-8654-596c600a0a4c'
              ])->get("https://api-stg.oyindonesia.com/api/payment-checkout/$paymentLinkIdOrPartnerTrxId");
       } catch(\Exception $e) {
           throwException($e);
       }
    }
}