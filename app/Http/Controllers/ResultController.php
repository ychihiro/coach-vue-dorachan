<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $item = Result::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
}
