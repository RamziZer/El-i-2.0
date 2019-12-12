<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function theme()
    {
      return $this->belongsTo('App\Theme');
    }
}
