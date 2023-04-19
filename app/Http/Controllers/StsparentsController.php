<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\stsparent;
use Illuminate\Http\Request;

class StsparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $stsparents=stsparent::latest()->paginate(5);
       

        return view('admin.parent',compact('stsparents'))
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

        return view('admin.parent');
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
            'parent_id'=>'required',
            'student_number'=>'required',
            'phone_number'=>'required',
            'password'=>'required',
            
        ]);

        stsparent::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stsparent  $stsparent
     * @return \Illuminate\Http\Response
     */
    public function show(stsparent $stsparent)
    {
        //

        return view('admin.parent',compact('stsparents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stsparent  $stsparent
     * @return \Illuminate\Http\Response
     */
    public function edit(stsparent $stsparent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stsparent  $stsparent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stsparent $stsparent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stsparent  $stsparent
     * @return \Illuminate\Http\Response
     */
    public function destroy(stsparent $stsparent)
    {
        //
    }

    public function report()
    {
        //

        return view('admin.reportp');
       
    }
}
