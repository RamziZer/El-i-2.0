<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'theid';

    public function events()
    {
      return $this->hasMany('App\Event');
    }
}
