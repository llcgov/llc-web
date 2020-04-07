<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Transparency;
use App\Models\ExecutiveOrder as EO;
use App\Models\News;
use App\Models\Image;
use App\Models\Schedule;
use App\Models\CovidCase;
use App\Models\BarangayCovid;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::all(['title', 'start', 'end', 'url', 'group_id']);
        foreach($schedule as $key => $value){
            if (is_null($value['url'])){
                unset($schedule[$key]['url']);
            }
            if (is_null($value['group_id'])){
                unset($schedule[$key]['group_id']);
            }
        }
        $data['covid'] = CovidCase::orderBy('created_at', 'DESC')->get();
        $data['schedules'] = $schedule;
        $data['posts'] = Post::orderBy('date_posted','desc')->get();
        $data['images'] = Image::where('type', 'Slider')->get();
        
        return view('client.index', $data);
    }

    public function transparency()
    {
        $data['transparency'] = Transparency::all();
        
        return view('client.transparency', $data);
    }

    public function executiveorders()
    {
        $data['eo'] = EO::all();
        return view('client.executiveorders', $data);
    }

    public function covid_details()
    {
        $data['covid'] = BarangayCovid::all();

        return view('client.coviddetails', $data);
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
