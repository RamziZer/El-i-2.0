<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Event extends Model
{

    protected $guarded = [];

    protected $dates = ['date'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function theme()
    {
      return $this->belongsTo('App\Theme');
    }

    public function alreadyPassed()
    {
      return $this->date->lessThan(now());
    }

    public function geoCoord()
    {
      $data = array(
      'street'     => $this->num_rue . ' Rue ' . $this->nom_rue,
      'postalcode' => $this->code_postal,
      'city'       => $this->ville,
      'country'    => 'France',
      'format'     => 'json',
      'limit'      => 1,
      'email'      => 'ramzi.zeroual@etu.umontpellier.fr'
    );
      $client = new Client(); //GuzzleHttp\Client
      $geo = $client->request('GET', 'https://nominatim.openstreetmap.org/?'. $data);
    }
}
