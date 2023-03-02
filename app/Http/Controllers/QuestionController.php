<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pluck('name')
        // $items = Diagnosis::all();
        // $items = Diagnosis::pluck('path');
        // $file = response()->file(Storage::path("storage"));
        // $file = storage_path('public/store/images/ジャイアン.jpg');
        // dd($item);
        
        // return response()->json($items, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->file('upfile')->getClientOriginalName();
        // dd($file_name);
        
        $include_public = Storage::putFileAs('public/images', $request->file('upfile'), $file_name);
        $path = str_replace('public/', '', $include_public);
        $name = $request->diagnosis_name;
        $item = new Diagnosis($request->get('diagnosis', ['path' => $path, 'name' => $name]));
        $item->save();
        return response()->json([
            'data' => $item
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
        //
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
