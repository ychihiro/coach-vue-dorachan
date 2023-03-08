<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Detail;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::all();
        return response()->json($items, 200);
    }

    public function product()
    {

    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $carts = Cart::where('user_id', $id)->get();
        foreach ($carts as $cart) {
            echo '商品ID:' . $cart['product_id'];
        }

        $purchases = Purchase::where('user_id', $id)->get();
        
        // $products = Product::whereHas('carts', function ($query) use ($id) {
        //     $query->where('user_id', $id);
        // })->get();
        return response()->json([
            'data' => [$carts, $purchases]
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
