<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::select(['id', 'product_id'])->get();
        return response()->json($carts, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Cart::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     // $carts = Cart::select('product_id')->where('user_id', $id)->get();
    //     // return response()->json([
    //     //     'data' => $carts
    //     // ], 200);
    //     $carts = Cart::select('product_id')->where('user_id', $id)->get();
    //     $items = array();
    //     foreach($carts as $cart) {
    //         $items[] = Product::where('id', $cart['product_id'])->get();
    //     }
    //     return response()->json([
    //         'data' => $items
    //     ], 200);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $update = [
    //         'count' => $request->count,
    //         'user_id' => $id
    //     ];
    //     $item = Cart::where('product_id', $request->product_id)->update($update);
    //     return response()->json([
    //         'data' => $item
    //     ], 200);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Cart::where('product_id', $id)->first();
        $item->delete(); 
    }
}
