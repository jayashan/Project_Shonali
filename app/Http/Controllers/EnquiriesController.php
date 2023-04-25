<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\enquiry;
use Illuminate\Http\Request;
use App\Models\Contact;

class EnquiriesController extends Controller
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
        $enquiries=enquiry::latest()->paginate(5);
            return view('admin.enquiry',compact('enquiries','messages'))
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
        return view('admin.enquiry');
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
            'full_name'=>'required',
            'mobile'=>'required',
            'nationality'=>'required',
            'email'=>'required',
            'enquiry_to'=>'required',
            'description'=>'required',
            
        ]);

        enquiry::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(enquiry $enquiry)
    {
        //
        return view('admin.enquiry',compact('enquiries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(enquiry $enquiry)
    {
        //
    }
}
