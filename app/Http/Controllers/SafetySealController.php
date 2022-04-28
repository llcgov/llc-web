<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SafetySeal;
use PDF;
use Log;
use Session;
use Redirect;

class SafetySealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['est'] = SafetySeal::orderBy('serial_number')->paginate(10);
        return view('admin.safetyseal', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientv2.pages.safetysealrequest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'estName' => 'required',
            'estAddress' => 'required',
            'contactNo' => 'required'
        ]);
        $db = SafetySeal::create(
            [
                'name'          =>  $data['name'],
                'email'         =>  $data['email'],
                'estName'       =>  $data['estName'],
                'estAddress'    =>  $data['estAddress'],
                'contactNo'     =>  $data['contactNo']
            ]);

        return back()->with('message', 'Thank you '. $data['name'].', Safety Seal Request has been sent.');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['est'] = SafetySeal::find($id);

        return view('admin.show.showsafetyseal', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit.editsafetyseal', ['est'=> SafetySeal::find($id)]);
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
        $safetyseal = SafetySeal::find($id);

        $safetyseal->name = $request->name;
        $safetyseal->estName = $request->estName;
        $safetyseal->estAddress = $request->estAddress;
        $safetyseal->email = $request->email;
        $safetyseal->serial_number = $request->serial_number;
        $safetyseal->issued_on = $request->issued_on;
        $safetyseal->validity = $request->validity;
        $safetyseal->status = $request->status;

        $safetyseal->save();

        return redirect()->route('safetyseal.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $safety_seal = SafetySeal::find($id);
        $safety_seal->delete();

        return redirect()->back();
    }
}
