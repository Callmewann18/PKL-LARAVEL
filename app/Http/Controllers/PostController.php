<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'required',
        ]);

        $image = $request->image->store('posts');

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image
        ]);

        session()->flash('success','Post Created Successfully');

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
          
        ]);

        if($request->hasFile('image')){
            $image = $request->image->store('posts');

            Storage::delete($post->image);
        } else {
            $image = $post->image;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image
        ]);

        session()->flash('success','Post Updated Successfully');

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);

        $post->delete();

        session()->flash('success','Post Deleted Successfully');

        return redirect('/posts');
    }
}
