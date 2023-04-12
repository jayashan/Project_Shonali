<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_number','enroll_id','fname','lname','gender','dob','email','phone_number','password','is_active','join_date'

    ];
}
