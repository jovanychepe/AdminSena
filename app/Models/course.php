<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentice');
    }
    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }
    public function training_center()
    {
        return $this->belongsTo('App\Models\Training_center');
    }
    
}
