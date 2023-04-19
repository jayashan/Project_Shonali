<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addlesson extends Model
{
    use HasFactory;
    protected $fillable=[
        'subject_name','date','lecture_name','lesson_description','grade'

    ];

}
