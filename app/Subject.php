<?php

namespace JurnalTask;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = ['updated_at', 'created_at'];

//    public function teachers(){
//    	return $this->hasMany('JurnalTask\Teacher', 'subject_id', 'id');
//    }


    public function students()
    {
        return $this->belongsToMany('JurnalTask\Student','grades','subjectID','studentID');
    }
}
