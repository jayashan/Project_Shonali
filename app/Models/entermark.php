<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entermark extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_name','student_id','subject_name','date','lecture_name','exam_type','marks','grade'

    ];

}
