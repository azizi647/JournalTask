<?php

namespace JurnalTask;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
        'name', 'status'
    ];
}
