<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addattendance extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_name','date','lecture_name', 'grade'

    ];

}
