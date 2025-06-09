<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = 0;
        $totalWeight = 0;

        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
            $totalWeight += $item['weight'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'subtotal', 'totalWeight'));
    }

    public function calculateShipping(Request $request)
    {
        $distance = $request->input('distance');
        $totalWeight = $request->input('total_weight');

        if ($totalWeight <= 5) {
            $shippingFee = $distance * 5000;
        } else {
            $shippingFee = $distance * 7000;
        }

        return response()->json([
            'shipping_fee' => $shippingFee,
            'shipping_fee_format' => number_format($shippingFee) . ' VND',
        ]);
    }
}
