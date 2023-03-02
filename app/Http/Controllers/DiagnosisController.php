<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Choice;
use App\Models\Diagnosis;
use App\Models\Like;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        // $file_name = $request->file('upfile')->getClientOriginalName();
        // $include_public = Storage::putFileAs('public/images', $request->file('upfile'), $file_name);
        // $path = str_replace('public/', '', $include_public);
        // $character = new Character($request->get('character', [
        //     'diagnosis_id' => $diagnosis->id,
        //     'name' => $request->character_name,
        //     'path' => $request->$path,
            // 'path' => $request->path,
            // 'description' => $request->description,
            // 'cooperation' => $request->cooperation,
            // 'extroversion' => $request->extroversion,
            // 'sincerity' => $request->sincerity,
            // 'openness' => $request->openness,
            // 'nerve' => $request->nerve,
        // ]));
        // $character->save();
        // dd($character);

        // $characters = $request->characters;

        // for ($i = 0; $i < count($request->character_name); $i++) {
        //     $file_name = $request->file('upfile')[$i]->getClientOriginalName();
        //     $include_public = Storage::putFileAs('public/images', $request->file('upfile')[$i], $file_name);
        //     $path = str_replace('public/', '', $include_public);
        //     $character = new Character($request->get('character', [
        //         'diagnosis_id' => $diagnosis->id,
        //         'name' => $request->character_name[$i],
        //         'path' => $path,
        //         'description' => $request->description[$i],
        //         'cooperation' => $request->cooperation[$i],
        //         'extroversion' => $request->extroversion[$i],
        //         'sincerity' => $request->sincerity[$i],
        //         'openness' => $request->openness[$i],
        //         'nerve' => $request->nerve[$i],
        //     ]));
        //     $character->save();
        // }
        // file_put_contents('test.log', print_r($request->character_name, true));

        for ($i = 0; $i < count($request->content); $i++) {
            $question = new Question($request->get('question', [
                'diagnosis_id' => $diagnosis->id,
                'content' => $request->content[$i],
                'number' => $i + 1,
            ]));
            $question->save();
            $choice = new Choice($request->get('choice', [
                'question_id' => $question->id,
                'content' => $request->content2[$i],
                'category' => $request->category[$i],
                'score' => $request->score[$i],
            ]));
            $choice->save();
        }
        // dd($request->content[]);

        // for ($i = 0; $i < count($request->category); $i++) {
        //     $choice = new Choice($request->get('choice', [
        //         'question_id' => $question->id,
        //         'content' => $request->content2[$i],
        //         'category' => $request->category[$i],
        //         'score' => $request->score[$i],
        //     ]));
        //     $choice->save();
        // }
        // dd($request->category[0]);

        file_put_contents('test.log', print_r($request->content[], true));
        file_put_contents('test2.log', print_r($request->content2[], true));
        
        // file_put_contents('test.log', print_r($request->file('upfile')[0], true));
        // foreach ( $characters as $item ) {
        //     $character = new Character($request->get('character', [
        //     'diagnosis_id' => $diagnosis->id,
        //     'name' => $item['character_name'],
            // 'path' => $item['path'],
            // 'description' => $item['description'],
            // 'cooperation' => $item['cooperation'],
            // 'extroversion' => $item['extroversion'],
            // 'sincerity' => $item['sincerity'],
            // 'openness' => $item['openness'],
            // 'nerve' => $item['nerve'],
        // ]));
        // $character->save();
            // echo 'キャラ名:' . $character['character_name'];
            // echo 'パス名:' . $character['path'];
            // echo 'パス名:' . $character['description'];
        // }
        return response()->json([
            'data' => [$diagnosis, $question, $choice]
        ], 201);
    }


    
    
        
        
        
        // $name = $request->diagnosis_name;
        
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
