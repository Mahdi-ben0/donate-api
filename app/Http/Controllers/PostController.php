<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Post::query();
        
        if($request->wilaya_id){
            $query->where('wilaya_id', $request->wilaya_id);
        }
        if($request->commun_id){
            $query->where('commun_id', $request->commun_id);
        }
        if($request->category_id){
            $query->where('category_id', $request->category_id);
        }
        if($request->object_item_id){
            $query->where('object_item_id', $request->object_item_id);
        }
        if($request->status){
            $query->where('status', $request->status);
        }
        if($request->user_id){
            $query->where('user_id', $request->user_id);
        }
        if($request->condition){
            $query->where('condition', $request->condition);
        }
        if($request->avalibility){
            $query->where('avalibility', $request->avalibility);
        }

        if($request->search){
            $query->where('title', 'like', '%'.$request->search.'%');
        }

        if($request->sort){
            $query->orderBy('created_at', $request->sort);
        }

        $posts = $query->paginate(15);

        return response()->json($posts);
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
            'object_item_id' => 'required|exists:object_items,id',
            'category_id' => 'required|exists:categories,id',
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
        $validated['status'] = 'availble';
        $validated['user_id'] = $request->user()->id;

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
