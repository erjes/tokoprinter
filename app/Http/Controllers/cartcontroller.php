<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('customer.cart');
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        transaksi::add($product_id, $quantity);

        return redirect()->route('customer.cart');
    }

    public function remove(Request $request, $id)
    {
        transaksi::remove($id);

        return redirect()->route('customer.cart');
    }

    public function checkout()
    {
        return view('customer.checkout');
    }
}
