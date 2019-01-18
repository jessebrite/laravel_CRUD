<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['description', 'completed'];
	// protected $guarded = [];

    function project()
    {
    	return $this->belongsTo(Project::class);
    }

    function complete($completed = true)
    {
    	$this->update(compact('completed'));
    }

    function incomplete()
    {
        $this->complete(false);
    }
}
