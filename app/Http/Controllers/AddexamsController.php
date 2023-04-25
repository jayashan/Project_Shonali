<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\addexam;
use Illuminate\Http\Request;
use App\Models\Contact;

class AddexamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages=Contact::latest()->paginate(5);
        $addexams=addexam::latest()->paginate(5);
        return view('teacher.addexam',compact('addexams','messages'))
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
        return view('teacher/addexam');
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
            'grade'=>'required',
            'exam_type'=>'required',
           
          
        ]);

        addexam::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addexam  $addexam
     * @return \Illuminate\Http\Response
     */
    public function show(addexam $addexam)
    {
        //
        return view('teacher.addexam',compact('addexams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addexam  $addexam
     * @return \Illuminate\Http\Response
     */
    public function edit(addexam $addexam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addexam  $addexam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addexam $addexam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addexam  $addexam
     * @return \Illuminate\Http\Response
     */
    public function destroy(addexam $addexam)
    {
        //
    }
}
