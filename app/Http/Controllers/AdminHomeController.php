<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\employee;
use App\Models\stsparent;

class AdminHomeController extends Controller
{
    //
    public function Index()
    {
        $No_Of_Lectures=Lecture::count();
        $No_Of_Students=Student::count();
        $No_Of_Employee=employee::count();
        $No_Of_Stsparents=stsparent::count();
        return view('admin.index',compact('No_Of_Lectures','No_Of_Students','No_Of_Employee','No_Of_Stsparents'));
    }

}
