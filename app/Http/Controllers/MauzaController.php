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
        $mauza = Mauza::with('patwar_circle.Qanoongoi.Tehsil.District')->get();

        return view('project.mauza.index',[
            'mauza' => $mauza
        ]);


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
        $mauza = Mauza::create($request->all());
        if ($mauza == true){
            return redirect(route('dashboard.mauza.index'))->with([
                'msg' => 'Mauza Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.mauza.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function show($patwar_circle_id)
    {
        $mauza = Mauza::where('patwar_circle_id',$patwar_circle_id)->get();
        return $mauza;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function edit(Mauza $mauza)
    {
        $data = $mauza;
        return view('project.mauza.update',compact('data'));
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
        $mauza->update($request->all());
        if ($mauza == true){
            return redirect(route('dashboard.mauza.index'))->with([
                'msg' => 'Mauza Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.mauza.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mauza  $mauza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mauza $mauza)
    {
        $mauza->delete();
        if ($mauza == true){
            return redirect(route('dashboard.mauza.index'))->with([
                'msg' => 'Mauza Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.mauza.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
