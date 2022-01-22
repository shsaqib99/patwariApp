<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use http\Env\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district = District::all();
        return view('project.district.index',[
            'district' =>$district
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
     * @param  \App\Http\Requests\StoreDistrictRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDistrictRequest $request)
    {
        $district = District::create($request->all());

        if ($district == true){
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'District Created!',
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
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        $data = $district;
        return view('project.district.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDistrictRequest  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDistrictRequest $request, District $district)
    {
        $district->update($request->all());
        if ($district == true){
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'District Update!',
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
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        $district->delete();
        if ($district == true){
            return redirect(route('dashboard.district.index'))->with([
                'msg' => 'District Delete!',
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
