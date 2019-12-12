<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';

    public $primaryKey = 'id';

    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
