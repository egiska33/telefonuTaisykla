<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRepairRequest;
use App\PhoneModel;
use App\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
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
        $models = PhoneModel::all();
        return view('repair.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepairRequest $request)
    {
        $repair = New Repair();
        $repair->user_id = Auth::user()->id;
        $repair->phone_model_id = $request->phone_model_id;
        $repair->message = $request->message;
        $repair->save();
        return redirect()->route('home')->with(['message'=>'Aciu jusu duomenys priimti']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        $repair = Repair::findOrFail($repair->id);

        $models = PhoneModel::orderBy('phone_manufacturer_id')->get();
        return view('repair.update', compact('models', 'repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRepairRequest $request, Repair $repair)
    {
        $repair->phone_model_id = $request->phone_model_id;
        $repair->message = $request->message;
        $repair->update();
        return redirect()->route('home')->with(['message'=>'Aciu jusu duomenys atnaujinti']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        //
    }
}
