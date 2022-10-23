<?php

namespace App\Http\Controllers;

use App\Models\Galary;
use App\Http\Requests\StoreGalaryRequest;
use App\Http\Requests\UpdateGalaryRequest;

class GalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photomedias = Galary::where('type', 1)->get();
        $videomedias = Galary::where('type', 2)->get();
        return view('gallery', compact('photomedias', 'videomedias'));
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
     * @param  \App\Http\Requests\StoreGalaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function show(Galary $galary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function edit(Galary $galary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalaryRequest  $request
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalaryRequest $request, Galary $galary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galary $galary)
    {
        //
    }
}
