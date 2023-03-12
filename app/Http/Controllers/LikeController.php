<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $likedItem = Like::all();
        return response()->json($likedItem, 200);
    }

    public function show($id)
    {
        $likedItem = Like::where('user_id', $id)->get();
        return response()->json([
            'data' => [$likedItem]
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function destroy(Request $request, $id)
    {
        Like::where('user_id', $request['user_id'])->where('diagnosis_id', $id)->delete();
    }
}
