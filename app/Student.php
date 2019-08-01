<?php

namespace JurnalTask;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'class', 'gender', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = ['updated_at', 'created_at'];

    public function grades()
    {
        return $this->belongsToMany('JurnalTask\Grade');
    }

    public function subjects()
    {
        return $this->belongsToMany('JurnalTask\Subject','grades','studentID','subjectID');
    }

}
