<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classdetail extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'class_id','class_number','student_number'

    ];
}
