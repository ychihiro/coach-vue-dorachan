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

    // public function cart($id)
    // {
    //     $carts = Cart::select('product_id')->where('user_id', $id)->get();
    //     // $items = array();
    //     // foreach($carts as $cart) {
    //     //     $items[] = Product::where('id', $cart['product_id'])->get();
    //     // }
    //     return response()->json([
    //         'data' => $carts
    //     ], 200);
    // } 

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $item = Cart::create($request->all());
    //     return response()->json([
    //         'data' => $item
    //     ], 201);
    // }

    public function customer(Request $request)
    {
        $purchase = new Purchase($request->get('purchase', [
            'user_id' => $request->user_id,
            'fullname' => $request->fullname,
            'postcode' => $request->postcode,
            'prefecture' => $request->prefecture,
            'city' => $request->city,
            'building_name' => $request->building_name,
            'delivery_date' => $request->delivery_date,
            'delivery_time' => $request->delivery_time,
        ]));
        $purchase->save();

        $detail = new Detail($request->get('detail', [
            'purchase_id' => $purchase->id,
            'product_id' => $request->product_id,
            'count' => $request->count,
        ]));
        $detail->save();
        
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
        Cart::where('product_id', $id)->delete();
    }
}
