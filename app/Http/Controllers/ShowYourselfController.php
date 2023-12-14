<?php

namespace App\Http\Controllers;

use App\Models\ShowYourself;
use Illuminate\Http\Request;

class ShowYourselfController extends Controller
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
        $request->img=$request->file('img')->store('/public/image');
        $request->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowYourself $showYourself)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShowYourself $showYourself)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShowYourself $showYourself)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShowYourself $showYourself)
    {
        //
    }
}
