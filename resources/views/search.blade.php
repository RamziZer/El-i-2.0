@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/search.css')}}">


<div class="header">
        <form method="POST" action="{{ route('search.search') }}" >
            @csrf
            <h1>Trouvez tous les évènements qui vous intéressent</h1>
            <div class="form-box">
                <input type="text" class="search-field event" name="name" placeholder="Events,Peronnes ...">
                <input type="text" class="search-field location" name="ville" placeholder="Ville">
                <button class="search-btn" type="submit">Rechercher</button>
            </div>
        </form>
    </div>
<div class="containe">
    @foreach($events as $event)
        <div class="box">
            <img src="{{ asset('css/img/image1.jpg') }}">
                <h1>{{$event->nom}}</h1>
            <div class="des">
                <p>{{$event->date}}
                </p>
            </div>
            <button> <a href="{{ route('events.show', ['event' => $event->id ])}}">Afficher</a></button>
        </div>
    @endforeach
</div>


{{ $events->links() }}
@endsection
