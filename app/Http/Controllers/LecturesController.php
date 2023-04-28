<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Lecture;
use Illuminate\Http\Request;
use App\Models\Contact;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=Contact::latest()->paginate(5);
        $lectures=Lecture::paginate(5);
        return view('admin.teacher',compact('lectures','messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.teacher');
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
            'lecture_id'=>'required|unique:lectures',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|max:255',
            'password'=>'required|min:6|max:255',
            'gender'=>'required',
            'address1'=>'required',
            'address2'=>'required',
        ]);

        Lecture::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
        return view('admin.teacher',compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
        $messages=Contact::latest()->paginate(5);
        return view('includes.teacher.EditTeacher',compact('lecture','messages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
        $request->validate([
            'lecture_id'=>'required|unique:lectures',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'gender'=>'required',
            'address1'=>'required',
            'address2'=>'required',
        ]);

        $lecture->update($request->all());

        return redirect()->route('lectures.index')
                        ->with('success','lecture updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
    }

    public function report()
    {
        //

        return view('admin.report');
       
    }



}
