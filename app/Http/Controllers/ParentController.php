<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\parent;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parent=parent::latest()->paginate(5);
        return view('admin.parent',compact('parent'))
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

        parent::create($request->all());

        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function show(parent $parent)
    {
        //
        return view('admin.parent',compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function edit(parent $parent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parent $parent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(parent $parent)
    {
        //
    }
}
