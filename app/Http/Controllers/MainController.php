<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Transparency;
use App\Models\News;
use App\Models\Image;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::all();
        $data['images'] = Image::where('type', 'Slider')->get();
        
        return view('client.index', $data);
    }

    public function transparency()
    {
        // $quarter['one'] = Transparency::where('type', '1st Quarter')->get();
        // $quarter['two'] = Transparency::where('type', '2nd Quarter')->get();
        // $quarter['three'] = Transparency::where('type', '3rd Quarter')->get();
        // $quarter['four'] = Transparency::where('type', '4th Quarter')->get();
        // $quarter['annual'] = Transparency::where('type', 'Annual')->get();
        
        // $data['transparency'] = $quarter;

        $data['transparency'] = Transparency::all();

        // $year = $transparency->groupBy('year');
        // $data['transparency'] = $year->groupBy('type');

        // foreach($year as $key => $item){
        //     echo $key;
        //     echo '<br>';

        //     $data = $item->groupBy('type');
        //     foreach($data as $key_quarter => $skit){
        //         echo $key_quarter;
        //         foreach($skit as $data){
        //     echo '<br>';
        //             echo $data['title'];
        //         }
        //     }
        //     echo '<br>';

        // }
        
        return view('client.transparency', $data);
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
        //
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
