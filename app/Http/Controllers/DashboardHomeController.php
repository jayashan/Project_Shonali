<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\employee;
use App\Models\stsparent;
use App\Models\Contact;

class DashboardHomeController extends Controller
{
    //
    public function Index()
    {
        $No_Of_Lectures=Lecture::count();
        $No_Of_Students=Student::count();
        $No_Of_Employee=employee::count();
        $No_Of_Stsparents=stsparent::count();
        $messages=Contact::count();
        return view('admin.index',compact('messages','No_Of_Lectures','No_Of_Students','No_Of_Employee','No_Of_Stsparents'));  
    }
}
