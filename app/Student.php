<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='student';



    public function subjectEnrolled()
    {
        return $this->hasMany('App\SubjectEnrolled','studid');
    }
}
