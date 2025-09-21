<?php

namespace App\Http\Controllers;

use App\Models\Commun;
use Illuminate\Http\Request;

class CommunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $communs = Commun::where('wilaya_id', $request->wilaya_id)->get();
        return response()->json($communs);
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
    public function show(commun $commun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commun $commun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, commun $commun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commun $commun)
    {
        //
    }
}
