<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        $items = Diagnosis::with('characters', 'questions.choices')->get();
        return response()->json($items, 200);
    }

    public function store(Request $request)
    {
        $diagnosis = new Diagnosis($request->get('diagnosis', ['name' => $request->diagnosis_name]));
        $diagnosis->save();

        $characters = $request->characters;
        foreach ( $characters as $item ) {
            $character = new Character($request->get('character', [
            'diagnosis_id' => $diagnosis->id,
            'name' => $item['character_name'],
            'path' => $item['path'],
            'description' => $item['description'],
            'cooperation' => $item['cooperation'],
            'extroversion' => $item['extroversion'],
            'sincerity' => $item['sincerity'],
            'openness' => $item['openness'],
            'nerve' => $item['nerve'],
        ]));
        $character->save();
            
        }
        return response()->json([
            'data' => [$diagnosis, $character]
        ], 201);
    }    

    public function show($id)
    {
        $items = Diagnosis::whereHas('likes', function($query) use($id){    
            $query->where('user_id', $id);
        })->get();
        return response()->json([
            'data' => $items
        ], 200);
    }
}
