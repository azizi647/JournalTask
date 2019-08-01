<?php

namespace JurnalTask;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','gender','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = ['updated_at', 'created_at'];

}
