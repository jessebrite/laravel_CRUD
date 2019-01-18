<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    public function tasks()
    {
    	// 1:m relationship
    	return $this->hasMany(Task::class);
    }

    function addTask($task)
    {
    	$this->tasks()->create($task);
    }
}
