<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// protected $fillable = ['desription'];
	protected $guarded = [];

    function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
