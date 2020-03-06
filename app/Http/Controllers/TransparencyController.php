<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transparency;
use Illuminate\Support\Facades\Storage;

class TransparencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['transparency'] = Transparency::all();
        return view('admin.transparency', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = request()->file('name');
        $fileName =  $file->getClientOriginalName();
        $file_path = Storage::put('public/PDF', $file);

        $post = Transparency::create([
            'name' => request()->file('name')->hashName(), 
            'path' => 'public/PDF', 
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'functionaries' => $request->input('functionaries'),
            'type' => $request->input('type')            
            ]);
        return redirect()->back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $file = Transparency::find($id);

        try {
            unlink('storage/PDF/' . $file->name);    
            $file->delete();

        } catch (\Throwable $th) {
            return $th;
        }

        return redirect()->back();
    }
}
