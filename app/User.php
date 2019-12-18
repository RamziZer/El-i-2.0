<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function event()
    {
        return $this->hasOne('App\Event');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function notes()
    {
      return $this->hasMany('App\Note');
    }

    public function isAdmin()
    {
      return $this->role_id == 1;
    }

    public function isContributeur()
    {
      return $this->role_id == 2;
    }

    public function makeContributeur()
    {
      $this->update([
        'role_id' => 2
      ]);
    }

    public function participate($event)
    {
      $this->events()->attach($event);
    }

    public function participatePas($event)
    {
      $this->events()->detach($event);
    }

    public function participatedEvents()
    {
      return $this->events()->where('date', '<', now());
    }

    public function futureParticipateEvents()
    {
      return $this->events()->where('date', '>', now());
    }

    public function alreadyParticipating($event)
    {
      return !! $this->events->contains($event);
    }

    public function alreadyReviewed($event)
    {
      return !! $this->notes->contains($event->id);
    }

    public function leaveReview($event, $note)
    {
      return !! $this->notes()->create([
        'event_id' => $event,
        'note' => $note
      ]);
    }
}
