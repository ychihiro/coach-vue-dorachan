<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Diagnosis;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Diagnosis::with('characters', 'questions.choices')->get();
        return response()->json($items, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //     // echo 'キャラ名:' . $character['character_name'];
        //     // echo 'パス名:' . $character['path'];
        //     // echo 'パス名:' . $character['description'];
        }
        return response()->json([
            'data' => [$diagnosis, $character]
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
    }
}
