<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
