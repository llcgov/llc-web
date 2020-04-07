<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangayCovid;

class BarangayCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['covid'] = BarangayCovid::all();
        return view('admin.barangaycovidcases', $data);
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
        $carbon = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('date_posted'));
        $logs = BarangayCovid::create([
            'barangay'          => $request->input('barangay'),
            'confirmed_case'    => $request->input('confirmed_case'),
            'pum'               => $request->input('pum'),
            'pui'               => $request->input('pui'),
            'recovered'         => $request->input('recovered'),
            'deaths'            => $request->input('deaths'),
            'pui_tested'        => $request->input('pui_tested'),
            'date_posted' => $carbon->format('Y-m-d')  
        ]);

        logs()->info($logs);

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
        $covid = BarangayCovid::find($id);

        try {
            $covid->delete();

        } catch (\Throwable $th) {
            return $th;
        }

        return redirect()->back();
    }
}
