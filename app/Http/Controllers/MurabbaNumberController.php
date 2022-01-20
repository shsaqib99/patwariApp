<?php

namespace App\Http\Controllers;

use App\Models\MurabbaNumber;
use App\Http\Requests\StoreMurabbaNumberRequest;
use App\Http\Requests\UpdateMurabbaNumberRequest;

class MurabbaNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMurabbaNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMurabbaNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MurabbaNumber  $murabbaNumber
     * @return \Illuminate\Http\Response
     */
    public function show(MurabbaNumber $murabbaNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MurabbaNumber  $murabbaNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(MurabbaNumber $murabbaNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMurabbaNumberRequest  $request
     * @param  \App\Models\MurabbaNumber  $murabbaNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMurabbaNumberRequest $request, MurabbaNumber $murabbaNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MurabbaNumber  $murabbaNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(MurabbaNumber $murabbaNumber)
    {
        //
    }
}
