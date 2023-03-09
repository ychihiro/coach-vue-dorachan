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
    public function store(Request $request)
    {
    
    }

    public function customer(Request $request)
    {
        $purchase = new Purchase($request->get('purchase', [
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'count' => $request->count,
            'fullname' => $request->fullname,
            'postcode' => $request->postcode,
            'prefecture' => $request->prefecture,
            'city' => $request->city,
            'building_name' => $request->building_name,
            'delivery_date' => $request->delivery_date,
            'delivery_time' => $request->delivery_time,
        ]));
        $purchase->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Purchase::where('user_id', $id)->with('product')->get();
        return response()->json([
            'data' => [ $items]
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
        $update = [
            'fullname' => $request->fullname,
            'postcode' => $request->postcode,
            'prefecture' => $request->prefecture,
            'city' => $request->city,
            'building_name' => $request->building_name,
            'delivery_date' => $request->delivery_date,
            'delivery_time' => $request->delivery_time,
        ];
        $item = Purchase::where('id', $id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
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
