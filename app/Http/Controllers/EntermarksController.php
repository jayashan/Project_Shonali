<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\entermark;
use Illuminate\Http\Request;

class EntermarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $entermarks=entermark::latest()->paginate(5);
        return view('teacher.entermarks',compact('entermarks'))
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
        return view('teacher/entermarks');
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
            'student_id'=>'required',
            'subject_name'=>'required',
            'date'=>'required',
            'lecture_name'=>'required',
            'exam_type'=>'required',
            'marks'=>'required',
            'grade'=>'required',
          
           
          
        ]);

        entermark::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entermark  $entermark
     * @return \Illuminate\Http\Response
     */
    public function show(entermark $entermark)
    {
        //
        return view('teacher.entermarks',compact('entermarks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entermark  $entermark
     * @return \Illuminate\Http\Response
     */
    public function edit(entermark $entermark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entermark  $entermark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entermark $entermark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entermark  $entermark
     * @return \Illuminate\Http\Response
     */
    public function destroy(entermark $entermark)
    {
        //
    }
}
