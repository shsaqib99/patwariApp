<?php

namespace App\Http\Controllers;

use App\Models\PatwarCircle;
use App\Http\Requests\StorePatwarCircleRequest;
use App\Http\Requests\UpdatePatwarCircleRequest;

class PatwarCircleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patwar_circle = PatwarCircle::with('Qanoongoi.Tehsil.District')->get();

        return view('project.patwar_circle.index',[
            'patwar_circle' => $patwar_circle
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
     * @param  \App\Http\Requests\StorePatwarCircleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatwarCircleRequest $request)
    {
        $patwar_circle = PatwarCircle::create($request->all());
        if ($patwar_circle == true){
            return redirect(route('dashboard.PatwarCircle.index'))->with([
                'msg' => 'PatwarCircle Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.PatwarCircle.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatwarCircle  $PatwarCircle
     * @return \Illuminate\Http\Response
     */
    public function show($qanoongoi_id)
    {
        $patwar_circle = PatwarCircle::where('qanoongoi_id',$qanoongoi_id)->get();
        return $patwar_circle;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatwarCircle  $PatwarCircle
     * @return \Illuminate\Http\Response
     */
    public function edit(PatwarCircle $PatwarCircle)
    {
        $data = $PatwarCircle;
        return view('project.patwar_circle.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatwarCircleRequest  $request
     * @param  \App\Models\PatwarCircle  $PatwarCircle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatwarCircleRequest $request, PatwarCircle $PatwarCircle)
    {
        $PatwarCircle->update($request->all());
        if ($PatwarCircle == true){
            return redirect(route('dashboard.PatwarCircle.index'))->with([
                'msg' => 'Patwar Cicle Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.PatwarCircle.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatwarCircle  $PatwarCircle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatwarCircle $PatwarCircle)
    {
        $PatwarCircle->delete();
        if ($PatwarCircle == true){
            return redirect(route('dashboard.PatwarCircle.index'))->with([
                'msg' => 'Patwar Cicle Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.PatwarCircle.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
