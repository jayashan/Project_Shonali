<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stsparent extends Model
{
    use HasFactory;

    protected $fillable=[
        'parent_id','student_number','phone_number','password'

    ];
}
