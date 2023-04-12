<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fee=fee::latest()->paginate(5);
        return view('admin.fee',compact('fee'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.fee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'record_number'=>'required',
            'grade'=>'required',
            'fee_month'=>'required',
            'status'=>'required',
           
        ]);

        fee::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(fee $fee)
    {
        //
        return view('admin.fee',compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(fee $fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fee $fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(fee $fee)
    {
        //
    }
}
