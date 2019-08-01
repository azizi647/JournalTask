<?php

namespace JurnalTask;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table='grades';

    protected  $fillable =[
        'studentID', 'teacherID', 'subjectID', 'dayID', 'journalID', 'grade'
    ];


    public function students()
    {
        return $this->belongsToMany('JurnalTask\Student');
    }
}
