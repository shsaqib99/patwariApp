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
        return view('project.tehsil.index');
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
        $tehsil = Tehsil::create($request->all());
        if ($tehsil == true){
            return redirect(route('dashboard.tehsil.index'))->with([
                'msg' => 'Tehsil Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
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
        $data = $tehsil;
        return view('project.tehsil.update',compact('data'));
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
        $tehsil->update($request->all());
        if ($tehsil == true){
            return redirect(route('dashboard.tehsil.index'))->with([
                'msg' => 'Tehsil Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tehsil  $tehsil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tehsil $tehsil)
    {
        $tehsil->delete();
        if ($tehsil == true){
            return redirect(route('dashboard.tehsil.index'))->with([
                'msg' => 'Tehsil Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
