<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\feedetail;
use Illuminate\Http\Request;

class FeedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $feedetail=feedetail::latest()->paginate(5);
        return view('admin.feedetail',compact('feedetail'))
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
        return view('admin.feedetail');
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
            'fee_id'=>'required',
            'record_number'=>'required',
            'student_number'=>'required',
            'year'=>'required',
            'grade'=>'required',
            'received_by'=>'required',
            'paid_on'=>'required',
            
        ]);

        feedetail::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedetail  $feedetail
     * @return \Illuminate\Http\Response
     */
    public function show(feedetail $feedetail)
    {
        //
        return view('admin.feedetail',compact('feedetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedetail  $feedetail
     * @return \Illuminate\Http\Response
     */
    public function edit(feedetail $feedetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedetail  $feedetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedetail $feedetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedetail  $feedetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedetail $feedetail)
    {
        //
    }
}
