<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\addlesson;
use Illuminate\Http\Request;

class AddlessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $addlessons=addlesson::latest()->paginate(5);
        return view('teacher.addlesson',compact('addlessons'))
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
        return view('teacher/addlesson');
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
            'subject_name'=>'required',
            'date'=>'required',
            'lecture_name'=>'required',
            'lesson_description'=>'required',
            'grade'=>'required',
            
           
          
        ]);

        addlesson::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addlesson  $addlesson
     * @return \Illuminate\Http\Response
     */
    public function show(addlesson $addlesson)
    {
        //
        return view('teacher.addlesson',compact('addlessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addlesson  $addlesson
     * @return \Illuminate\Http\Response
     */
    public function edit(addlesson $addlesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addlesson  $addlesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addlesson $addlesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addlesson  $addlesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(addlesson $addlesson)
    {
        //
    }
}
