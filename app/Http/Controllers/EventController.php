<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
          'title' => 'required',
          'date' => 'required',
          'num_r' => 'required',
          'nom_r' => 'required',
          'cmp_adr' => 'required',
          'description' => 'required',
          'ville' => 'required',
          'code_postal' => 'required'
        ]);

        Event::create([
          "nom" => request('title'),
          "date" => request('date'),
          "num_rue" => request('num_r'),
          "nom_rue" => request('nom_r'),
          "ville" => request('ville'),
          "theme" => request('theme'),
          "descriptif" => request('description'),
          "codepostal" => request('code_postal'),
          "complement" => request('cmp_adr'),
        ]);

        return redirect('/search')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('eventpage', [
          'events' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
