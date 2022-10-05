<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Transparency;
use App\Models\ExecutiveOrder as EO;
use App\Models\News;
use App\Models\Image;
use App\Models\Schedule;
use App\Models\Sap;
use App\Models\SafetySeal;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

//Development
use Illuminate\Support\Facades\Log;

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
        $data['schedules'] = $schedule;
        $data['posts'] = Post::orderBy('date_posted','desc')->get();
        $data['images'] = Image::where('type', 'Slider')->orderBy('created_at', 'asc')->get();
        
        return view('clientv2.pages.index', $data);
    }

    public function transparency()
    {
        $data['transparency'] = Transparency::where('functionaries', '!=', 'BAC')->get();
        $data['bac'] = Transparency::where('functionaries', 'BAC')->get();
        
        return view('clientv2.pages.transparency', $data);
    }
    public function citizenChart()
    {
        $data['citizenchart'] = Transparency::where('type', '=', 'CitizenCharter')->get();

        return view('clientv2.pages.citizenscharter', $data);
    }
    public function DevolutionPlan()
    {
        $data['devplan'] = Transparency::where('type', '=', 'DevPlan')->get();

        return view('clientv2.pages.citizenscharter', $data);
    }



    public function executiveorders()
    {
        $data['eo'] = EO::all();
        return view('clientv2.pages.eo', $data);
    }

    public function sap()
    {
        $data['sap'] = Sap::orderBy('title')->get();
        return view('client.sap', $data);
    }

    // DESIGN TEMPLATE
    public function template()
    {
        $data['images'] = Image::where('type', 'Slider')->orderBy('created_at', 'asc')->get();
        
        return view('clientv2.pages.index', $data);
    }

    public function safetySealVerify($serial)
    {
        $data['safetySeal'] = SafetySeal::where('serial_number', $serial)->first();

        // dd($data['safetySeal']);
        return view('clientv2.pages.sealverification', $data);
    }



}
