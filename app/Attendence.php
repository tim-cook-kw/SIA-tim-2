<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $table = 'student_attendence';
    protected $fillable = [
        'id', 'student', 'date', 'status',
    ];
}
