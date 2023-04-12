<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    use HasFactory;

    protected $fillable=[
        'enroll_id','fname','lname','email','contact_number'

    ];
}
