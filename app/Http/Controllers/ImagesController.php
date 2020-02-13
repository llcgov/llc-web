<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index()
    {
        $data['images'] = Image::paginate(10);
        return view('admin.images', $data);
    }

    public function upload(Request $request)
    {
        $file = request()->file('name');
        $fileName =  $file->getClientOriginalName();
        $image = Storage::put('public/' . $request->input('type'), $file);

        Image::create([
            'name' => request()->file('name')->hashName(),
            'path' => $request->input('type'),
            'type' => $request->input('type'),
            'size' => request()->file('name')->getSize()
        ]);
        
        return redirect()->back();
    }

    public function delete($id)
    {
        $file = Image::find($id);
        try {
            unlink('storage/' . $file->type . '/' . $file->name);    
        } catch (\Throwable $th) {
            return $th;
        }
        
        $file->delete();
        return redirect()->back();
    }
}
