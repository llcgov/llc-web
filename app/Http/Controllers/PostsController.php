<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::all();
        return view('admin.posts', $data);
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
        $post = Post::create([
            'title' => $request->input('title'), 
            'headline' => $request->input('headline'), 
            'video_url' => $request->input('video_url'), 
            'content' => $request->input('content'), 
            'post_type' => $request->input('post_type'),
            'date_posted' => $carbon->format('Y-m-d')
            ]);
        logs()->info(empty(request()->file('name')));
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

            $post->media()->save($media);
        }
        
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
        $data['post'] = Post::find($id);

        return view('client.article', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post'] = Post::find($id);

        return view('admin.edit.editpost', $data);
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
        $post = Post::find($id);

        $post->delete();
        return redirect()->back();
    }
}
