<?php

namespace App\Http\Controllers;

use App\Models\Wilaya;
use Illuminate\Http\Request;

class WilayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wilayas = Wilaya::all();
        return response()->json($wilayas);
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
    public function show(wilaya $wilaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wilaya $wilaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wilaya $wilaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wilaya $wilaya)
    {
        //
    }
}
