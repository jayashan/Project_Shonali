<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\classdetail;
use Illuminate\Http\Request;
use App\Models\Contact;

class ClassdetailsController extends Controller
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
        $classdetails=classdetail::latest()->paginate(5);
            return view('admin.classdetail',compact('classdetails','messages'))
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
        
 return view('admin.classdetail');
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
            'class_id'=>'required',
            'class_number'=>'required',
            'student_number'=>'required',
           
        ]);

        classdetail::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function show(classdetail $classdetail)
    {
        //
        return view('admin.classdetail',compact('classdetails'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(classdetail $classdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classdetail $classdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(classdetail $classdetail)
    {
        //
    }
}
