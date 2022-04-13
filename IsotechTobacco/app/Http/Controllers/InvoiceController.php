<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function getInvoiceData(Request $req)
    {
        $user = Auth::user();
        $select = Order::where('user_id', $user['id']) //get all for user ID. Filter through front end @dharma
                        ->where('order_id', $req['idTransaksiOy'])
                        ->get();

        return view ('usernew/order')->with('items',[
            'order' => $select,
            'cart' => $cart
        ]);
    }
}
