<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Student;

class AdminHomeController extends Controller
{
    //
    public function Index()
    {
        $No_Of_Lectures=Lecture::count();
        $No_Of_Students=Student::count();
        return view('admin.index',compact('No_Of_Lectures','No_Of_Students'));
    }

}
