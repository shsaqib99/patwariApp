<?php

namespace App\Http\Controllers;

use App\Models\Khaivet;
use App\Http\Requests\StoreKhaivetRequest;
use App\Http\Requests\UpdateKhaivetRequest;

class KhaivetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khaivet = Khaivet::with('mauza.patwar_circle.Qanoongoi.Tehsil.District')->get();

        return view('project.khaivet.index',[
            'khaivet' => $khaivet
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
     * @param  \App\Http\Requests\StoreKhaivetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKhaivetRequest $request)
    {
        $khaivet = Khaivet::create($request->all());
        if ($khaivet == true){
            return redirect(route('dashboard.khaivet.index'))->with([
                'msg' => 'Khaivet Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khaivet.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Khaivet  $khaivet
     * @return \Illuminate\Http\Response
     */
    public function show($mauza_id)
    {
        $khaivet = Khaivet::where('mauza_id',$mauza_id)->get();
        return $khaivet;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Khaivet  $khaivet
     * @return \Illuminate\Http\Response
     */
    public function edit(Khaivet $khaivet)
    {
        $data = $khaivet;
        return view('project.khaivet.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhaivetRequest  $request
     * @param  \App\Models\Khaivet  $khaivet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhaivetRequest $request, Khaivet $khaivet)
    {
        $khaivet->update($request->all());
        if ($khaivet == true){
            return redirect(route('dashboard.khaivet.index'))->with([
                'msg' => 'Khaivet Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khaivet.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khaivet  $khaivet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khaivet $khaivet)
    {
        $khaivet->delete();
        if ($khaivet == true){
            return redirect(route('dashboard.khaivet.index'))->with([
                'msg' => 'Khaivet Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.khaivet.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
