<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class AdminHomeController extends Controller
{
    //
    public function Index()
    {
        $No_Of_Lectures=Lecture::count();
        return view('admin.index',compact('No_Of_Lectures'));
    }

}
