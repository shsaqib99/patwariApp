<?php

namespace App\Http\Controllers;

use App\Models\Mauza;
use App\Http\Requests\StoreMauzaRequest;
use App\Http\Requests\UpdateMauzaRequest;

class MauzaController extends Controller
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
     * @param  \App\Http\Requests\StoreMauzaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMauzaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function show(Mauza $mauza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function edit(Mauza $mauza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMauzaRequest  $request
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMauzaRequest $request, Mauza $mauza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mauza $mauza)
    {
        //
    }
}
