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

    public function geoCoord($event)
    {
      $data = array(
      'street'     => $event->num_rue . ' Rue ' . $event->nom_rue,
      'postalcode' => $event->codepostal,
      'city'       => $event->ville,
      'country'    => 'France',
      'format'     => 'json',
      'limit'      => 1,
      'email'      => 'ramzi.zeroual@etu.umontpellier.fr'
    );
      $client = new Client(); //GuzzleHttp\Client
      $geo = json_decode($client->request('GET', 'https://nominatim.openstreetmap.org/?'. http_build_query($data))->getBody(), TRUE);

      $event->update([
        'late' => $geo[0]['lat'],
        'long' => $geo[0]['lon']
      ]);
    }
}
