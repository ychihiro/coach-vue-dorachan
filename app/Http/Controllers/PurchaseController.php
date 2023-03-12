<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $items = Product::all();
        return response()->json($items, 200);
    }

    public function store(Request $request)
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

    public function show($id)
    {
        $items = Purchase::where('user_id', $id)->with('product')->get();
        return response()->json([
            'data' => [ $items]
        ], 200);
    }

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

    public function destroy($id)
    {
        Cart::where('product_id', $id)->delete();
    }
}
