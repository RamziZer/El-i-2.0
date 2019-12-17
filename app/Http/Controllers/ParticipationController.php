<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class ParticipationController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Event $event)
    {
        auth()->user()->participate($event);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
      auth()->user()->participatePas($event);

      return back();
    }
}
