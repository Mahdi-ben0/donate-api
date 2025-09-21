<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'address' => 'required|string',
            'wilaya_id' => 'required|exists:wilayas,id',
            'commun_id' => 'required|exists:communs,id',
            'condition' => 'required|string|in:broken,worn,good,like-new,new',
            'avalibility' => 'required|string|in:weekend,weekdays-evenings,daytimes-on-weekdays,flexible',
            'image_paths' => 'required|array',
            'image_paths.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image_paths')){
            foreach($request->file('image_paths') as $image){
                $image_paths_path = $image->store('image_paths', 'public');
                $image_paths[] = $image_paths_path;
            }
        }else{
            $image_paths = null;
        }

        $validated['image_paths'] = $image_paths;

        $post = Post::create($validated);

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
