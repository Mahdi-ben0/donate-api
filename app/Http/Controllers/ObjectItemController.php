<?php

namespace App\Http\Controllers;

use App\Models\ObjectItem;
use Illuminate\Http\Request;

class ObjectItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $objectItems = ObjectItem::all();
        return response()->json($objectItems);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(ObjectItem $objectItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ObjectItem $objectItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ObjectItem $objectItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObjectItem $objectItem)
    {
        //
    }
}
