<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\addattendance;
use Illuminate\Http\Request;

class AddattendancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $addattendances=addattendance::latest()->paginate(5);
        return view('teacher.addattendance',compact('addattendances'))
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
        return view('teacher/addattendance');
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
            'student_name'=>'required',
            'date'=>'required',
            'lecture_name'=>'required',
            'grade'=>'required',
           
          
        ]);

        addattendance::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addattendance  $addattendance
     * @return \Illuminate\Http\Response
     */
    public function show(addattendance $addattendance)
    {
        //
        return view('teacher.addattendance',compact('addattendances'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addattendance  $addattendance
     * @return \Illuminate\Http\Response
     */
    public function edit(addattendance $addattendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addattendance  $addattendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addattendance $addattendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addattendance  $addattendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(addattendance $addattendance)
    {
        //
    }
}
