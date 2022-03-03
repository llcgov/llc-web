<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tourism;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;


class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $tour = Tourism::create([
            'name' => $request->input('name'), 
            'type' => $request->input('type'), 
            'description' => $request->input('description'), 
            'url' => $request->input('url'), 
            'date_start' => $request->input('date_start'), 
            'date_end' => $request->input('date_end'),
            ]);
        if(request()->file('name'))
        {
            $file = request()->file('name');
            $image = Storage::put('public/' . $request->input('type'), $file);

            $media = Media::create([
                'name' => request()->file('name')->hashName(),
                'path' => $request->input('type'),
                'type' => $request->input('type'),
                'size' => request()->file('name')->getSize()
            ]);

            $tour->media()->save($media);
        }
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
        //
    }
}
