<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enrollment=enrollment::latest()->paginate(5);
        return view('admin.enrollment',compact('enrollment'))
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
        return view('admin.enrollment');
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
            'enroll_id'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            
        ]);

        enrollment::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(enrollment $enrollment)
    {
        //
        return view('admin.enrollment',compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrollment $enrollment)
    {
        //
    }
}
