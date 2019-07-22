<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectEnrolled extends Model
{
    //
    protected $table='subject_enrolled';

    protected $fillable = ['studid','schoolyear','edpcode','subjectcode','subjectnumber','subjecttitle','semester','lec','lab','units'];

    public $timestamps=false;
    
     public function student()
    {
        return $this->belongsTo('App\Student','studentid');
    }
}
