<?php

namespace App\Http\Controllers;

use App\Models\Evalueation;
use Illuminate\Http\Request;

class EvalueationController extends Controller
{
    public function store(Request $request)
    {
        $item = Evalueation::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
}
