<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $gallery = Gallery::all(); 
    return view('gallery.index', compact('gallery'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = $request->file('image')->store('gallery', 'public');
    
       
        Gallery::create([
            'image' => $imagePath,
        ]);
    
       
        session()->flash('success', 'Upload Image Successfully');
    
     
        return redirect('/gallery');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Gallery $post)
    {
        return view('gallery.show')->with('post',$post);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $post)
    {
        return view('gallery.edit')->with('gallery',$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $post)
    {


        if($request->hasFile('image')){
            $image = $request->image->store('gallery');

            Storage::delete($post->image);
        } else {
            $image = $post->image;
        }

        $post->update([
            'image' => $image
        ]);

        session()->flash('success','Image Updated Successfully');

        return redirect('/gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $post)
    {
        Storage::delete($post->image);

        $post->delete();

        session()->flash('success','Post Deleted Successfully');

        return redirect('/gallery');
    }
}
