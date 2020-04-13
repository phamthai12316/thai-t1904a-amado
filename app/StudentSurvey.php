<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSurvey extends Model
{
    protected $table = 'student';
    protected $fillable = ['student_name','student_telephone','student_feedback'];
}
