<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\sfee;
use Illuminate\Http\Request;
use App\Models\Contact;

class SfeesController extends Controller
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
        $sfees=sfee::latest()->paginate(5);
       

        return view('admin.fee',compact('sfees','messages'))
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
        return view('admin.fee');
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
    'record_number'=>'required',
    'grade'=>'required',
    'fee_month'=>'required',
    'status'=>'required',
   
]);

sfee::create($request->all());

return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sfee  $sfee
     * @return \Illuminate\Http\Response
     */
    public function show(sfee $sfee)
    {
        //
        return view('admin.fee',compact('sfees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sfee  $sfee
     * @return \Illuminate\Http\Response
     */
    public function edit(sfee $sfee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sfee  $sfee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sfee $sfee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sfee  $sfee
     * @return \Illuminate\Http\Response
     */
    public function destroy(sfee $sfee)
    {
        //
    }
}
