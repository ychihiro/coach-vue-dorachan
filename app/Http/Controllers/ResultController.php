<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Diagnosis;
use App\Models\Purchase;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show($id)
    {
        $diagnoses = array(); 
        $results = Result::where('user_id', $id)->get();
        foreach ($results as $result) {
            $diagnoses[] = Diagnosis::where('id', $result['diagnosis_id'])->with(['characters' => function($query) use($result) {
                $query->where('id', $result['character_id']);
            }])->get();
        }
        return response()->json([
            'data' => $diagnoses
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Result::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
}
