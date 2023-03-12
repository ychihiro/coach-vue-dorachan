<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::select('product_id')->get();
        return response()->json($carts, 200);
    }

    public function store(Request $request)
    {
        $item = Cart::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
    public function destroy($id)
    {
        $item = Cart::where('product_id', $id)->first();
        $item->delete(); 
    }

    public function remove($id)
    {
        Cart::where('product_id', $id)->delete();
    }
}
