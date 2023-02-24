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
        // $items = Diagnosis::where('id', 56)->pluck('path');
        $item = 'file:///Applications/MAMP/htdocs/laravel-dorachan/public/storage/images/%E3%81%97%E3%81%9A%E3%81%8B%E3%81%A1%E3%82%83%E3%82%93.jpg';
        // $file = response()->file(Storage::path("storage"));
        // $file = storage_path('public/store/images/ジャイアン.jpg');
        // dd($item);
        
        return response()->json($item, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $file = $request->image->getClientOriginalName();
        
        $file = $request->file('upfile');
        $file_name = $file->getClientOriginalName();
        $path = $file->storeAs('public/store/images', $file_name, 'public');
        // ->storeAs('images', $filename, 'public');
        // Menu::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'calorie' => $request->calorie,
        //     'path' => $path,
        //     'category_id' => $request->category_id
        // ]);

        // $file = $request->file('upfile');
        // $image = $request->path;
        // $file = $request->file('upfile');
        // dd($file);
        // $file = $request->file('upfile');
        // $path = Storage::disk('public');
        // $path = Storage::disk('public')->put('images', $file);
        
        // $imagePath = "/storage/$path";
        // $image->storeAs('public/', $image);
        $item = new Diagnosis($request->get('diagnosis', ['path' => $path]));
        $item->save();
        // dd($path);
        // $item = Diagnosis::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
        // $file = Diagnosis::create(['path' => $file]);
        // return response()->json([
        //     'data' => $file
        // ], 201);
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
