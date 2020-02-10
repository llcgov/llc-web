<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function upload(Request $request)
    {
        $file = request()->file('name');
        $fileName =  $file->getClientOriginalName();

        $image = Storage::put('public/' . $request->input('type'), $file);


        Image::create([
            'name' => request()->file('name')->hashName(),
            'path' => 'public/' . $request->input('type'),
            'file_extension' => 'test',
            'type' => 'test',
            'size' => $request->input('type')
        ]);
    }

    public function delete($id)
    {
        $file = Image::find($id);
        try {
            unlink('storage/' . $file->category . '/' . $file->file_name);    
        } catch (\Throwable $th) {
            return $th;
        }
        
        $file->delete();

        return redirect()->back();
    }
}
