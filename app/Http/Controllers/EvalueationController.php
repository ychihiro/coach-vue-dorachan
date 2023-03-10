<?php

namespace App\Http\Controllers;

use App\Models\Evalueation;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class EvalueationController extends Controller
{
    public function index(Request $request)
    {
        $purchases = Purchase::all();
        $test = array();
        foreach($purchases as $purchase)
        {
            $user = User::where('id', $purchase['user_id'])->get();
            $test[] = $user[0]->email;
            
        }
        dd($test);
        // $purchase->user->name;
        // $items = Purchase::get()->user->email;
        // dd($items);
        // $items = User::find(1)->purchases->get();
        return response()->json($user, 200);
    }

    public function store(Request $request)
    {
        $item = Evalueation::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
}
