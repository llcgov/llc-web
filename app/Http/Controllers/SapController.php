<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sap;
use Illuminate\Support\Facades\Storage;


class SapController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sap'] = Sap::all();
        return view('admin.sap', $data);
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
        $file_path = Storage::put('public/SAP', $file);

        $post = Sap::create([
            'name' => request()->file('name')->hashName(), 
            'path' => 'public/SAP',             
            'title' => $request->input('title'),
            ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function destroy($id)
    {
        $file = ExecutiveOrder::find($id);

        try {
            unlink('storage/SAP/' . $file->name);    
            $file->delete();

        } catch (\Throwable $th) {
            return $th;
        }

        return redirect()->back();
    }
}
