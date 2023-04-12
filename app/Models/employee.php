<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'employee_id','fname','lname','email','password','gender','address1','address2'

    ];
}
