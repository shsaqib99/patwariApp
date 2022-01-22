<?php

namespace App\Http\Controllers;

use App\Models\Qanoongoi;
use App\Http\Requests\StoreQanoongoiRequest;
use App\Http\Requests\UpdateQanoongoiRequest;

class QanoongoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qanoongoi = Qanoongoi::with('Tehsil.District')->get();

        return view('project.qanoongoi.index',[
            'qanoongoi' => $qanoongoi
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
     * @param  \App\Http\Requests\StoreQanoongoiRequest  $qanoongoi
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQanoongoiRequest $qanoongoi)
    {
        $qanoongoi = Qanoongoi::create($qanoongoi->all());
        if ($qanoongoi == true){
            return redirect(route('dashboard.qanoongoi.index'))->with([
                'msg' => 'Qanoongoi Created!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.qanoongoi.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qanoongoi  $qanoongoi
     * @return \Illuminate\Http\Response
     */
    public function show($tehsil_id)
    {
        $qanoongoi = Qanoongoi::where('tehsil_id',$tehsil_id)->get();
        return $qanoongoi;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qanoongoi  $qanoongoi
     * @return \Illuminate\Http\Response
     */
    public function edit(Qanoongoi $qanoongoi)
    {
        $data = $qanoongoi;
        return view('project.qanoongoi.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQanoongoiRequest  $request
     * @param  \App\Models\Qanoongoi  $qanoongoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQanoongoiRequest $request, Qanoongoi $qanoongoi)
    {
        $qanoongoi->update($request->all());
        if ($qanoongoi == true){
            return redirect(route('dashboard.qanoongoi.index'))->with([
                'msg' => 'Qanoongoi Update!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.qanoongoi.update'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qanoongoi  $qanoongoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qanoongoi $qanoongoi)
    {
        $qanoongoi->delete();
        if ($qanoongoi == true){
            return redirect(route('dashboard.qanoongoi.index'))->with([
                'msg' => 'Qanoongoi Delete!',
                'status' => 'success'
            ]);
        } else {
            return redirect(route('dashboard.qanoongoi.index'))->with([
                'msg' => 'Server Error!',
                'status' => 'error'
            ]);
        }
    }
}
