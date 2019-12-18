<?php

namespace App\Http\Controllers;

use App\Note;
use App\Event;
use App\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $event = Event::find($id);

        auth()->user()->leaveReview($event->id, request('star'));

        return back();
    }

}
