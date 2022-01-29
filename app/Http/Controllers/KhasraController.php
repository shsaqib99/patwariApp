<?php

namespace App\Http\Controllers;

use App\Models\Khasra;
use App\Http\Requests\StoreKhasraRequest;
use App\Http\Requests\UpdateKhasraRequest;

class KhasraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khasra = Khasra::with('khatooni.khaivet.mauza.patwar_circle.Qanoongoi.Tehsil.District')->get();

        return view('project.khasra.index',[
            'khasra' => $khasra
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
     * @param  \App\Http\Requests\StoreKhasraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKhasraRequest $request)
    {
        $khasra = Khasra::create($request->all());
        if ($khasra == true){
            return redirect(route('dashboard.khasra.index'))->with([
                'msg' => 'Khasra Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khasra.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Khasra  $khasra
     * @return \Illuminate\Http\Response
     */
    public function show($khatooni_id)
    {
        $khasra = Khasra::where('khatooni_id',$khatooni_id)->get();
        return $khasra;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Khasra  $khasra
     * @return \Illuminate\Http\Response
     */
    public function edit(Khasra $khasra)
    {
        $data = $khasra;
        return view('project.khasra.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhasraRequest  $request
     * @param  \App\Models\Khasra  $khasra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhasraRequest $request, Khasra $khasra)
    {
        $khasra->update($request->all());
        if ($khasra == true){
            return redirect(route('dashboard.khasra.index'))->with([
                'msg' => 'Khasra Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khasra.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khasra  $khasra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khasra $khasra)
    {
        $khasra->delete();
        if ($khasra == true){
            return redirect(route('dashboard.khasra.index'))->with([
                'msg' => 'Khasra Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khasra.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
