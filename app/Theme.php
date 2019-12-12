<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $guraded = [];

    public function events()
    {
      return $this->hasMany('App\Event');
    }
}
