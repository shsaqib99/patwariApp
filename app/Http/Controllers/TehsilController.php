<?php

namespace App\Http\Controllers;

use App\Models\Tehsil;
use App\Http\Requests\StoreTehsilRequest;
use App\Http\Requests\UpdateTehsilRequest;

class TehsilController extends Controller
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
     * @param  \App\Http\Requests\StoreTehsilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTehsilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tehsil  $tehsil
     * @return \Illuminate\Http\Response
     */
    public function show(Tehsil $tehsil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tehsil  $tehsil
     * @return \Illuminate\Http\Response
     */
    public function edit(Tehsil $tehsil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTehsilRequest  $request
     * @param  \App\Models\Tehsil  $tehsil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTehsilRequest $request, Tehsil $tehsil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tehsil  $tehsil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tehsil $tehsil)
    {
        //
    }
}