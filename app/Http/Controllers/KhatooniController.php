<?php

namespace App\Http\Controllers;

use App\Models\Khatooni;
use App\Http\Requests\StoreKhatooniRequest;
use App\Http\Requests\UpdateKhatooniRequest;

class KhatooniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khatooni = Khatooni::with('khaivet.mauza.patwar_circle.Qanoongoi.Tehsil.District')->get();

        return view('project.khatooni.index',[
            'khatooni' => $khatooni
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
     * @param  \App\Http\Requests\StoreKhatooniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKhatooniRequest $request)
    {
        $khatooni = Khatooni::create($request->all());
        if ($khatooni == true){
            return redirect(route('dashboard.khatooni.index'))->with([
                'msg' => 'Khatooni Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khatooni.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Khatooni  $khatooni
     * @return \Illuminate\Http\Response
     */
    public function show($khaivet_id)
    {
        $khanooti = Khatooni::where('khaivet_id',$khaivet_id)->get();
        return $khanooti;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Khatooni  $khatooni
     * @return \Illuminate\Http\Response
     */
    public function edit(Khatooni $khatooni)
    {
        $data = $khatooni;
        return view('project.khatooni.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhatooniRequest  $request
     * @param  \App\Models\Khatooni  $khatooni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhatooniRequest $request, Khatooni $khatooni)
    {
        $khatooni->update($request->all());
        if ($khatooni == true){
            return redirect(route('dashboard.khatooni.index'))->with([
                'msg' => 'Khaivet Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khatooni.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khatooni  $khatooni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khatooni $khatooni)
    {
        $khatooni->delete();
        if ($khatooni == true){
            return redirect(route('dashboard.khatooni.index'))->with([
                'msg' => 'Khatooni Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khatooni.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
