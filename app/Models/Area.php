<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    
    public function teacher()
    {
        return $this->hasMany('App\Models\Teacher');
    }
    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
}
