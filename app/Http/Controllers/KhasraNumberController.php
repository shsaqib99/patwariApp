<?php

namespace App\Http\Controllers;

use App\Models\KhasraNumber;
use App\Http\Requests\StoreKhasraNumberRequest;
use App\Http\Requests\UpdateKhasraNumberRequest;

class KhasraNumberController extends Controller
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
     * @param  \App\Http\Requests\StoreKhasraNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKhasraNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KhasraNumber  $khasraNumber
     * @return \Illuminate\Http\Response
     */
    public function show(KhasraNumber $khasraNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhasraNumber  $khasraNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(KhasraNumber $khasraNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhasraNumberRequest  $request
     * @param  \App\Models\KhasraNumber  $khasraNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhasraNumberRequest $request, KhasraNumber $khasraNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhasraNumber  $khasraNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhasraNumber $khasraNumber)
    {
        //
    }
}
