<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'fee_id','record_number','student_number','year','grade','received_by','paid_on'

    ];
}
