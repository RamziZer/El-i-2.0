<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::paginate(20);
      return view('search')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
      $q = request('name');
      /* $v = request ('ville');
      $d = request ('date'); */
      $events = Event::where('nom', 'like', '%' . $q . '%')/* ->orwhere('ville','like','%'.$v.'%')->orwhere('date',$d)-> */->paginate(5) ;
      request()->flash();
      return view('search')->with('events',$events);
    }
}
