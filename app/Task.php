<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


// $task = Task::find(1);
// if($task->user_id == \Auth::user()->id){}