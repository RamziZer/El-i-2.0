

@extends('layout')

@section('content')
<head>
        <link rel="stylesheet" href="{{asset('css/footer1.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/f02947e5f2.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alatsi|Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">

    </head>

    <body>
        {{--     @include('inc.messages')
        --}}
        <article class="profile">
            <img src="/home/hririche/git/el-i/ProjetWebL3/profile-img.png">
            <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
            <ul>
                <li style="font-family: 'Alatsi', sans-serif; font-size: 19px;">{{ $user->name }}</li>
                {{-- <li style="font-family: 'Righteous', cursive; font-size:27px"> {{$user->first_name}} & prenom</li> --}}
                {{-- <li style="font-family: 'Amatic SC', cursive; font-size:25px" ><i class="fas fa-globe-africa"></i> adresse + icon </li> --}}

            </ul>

            <div class="liens">

                <a class="active" id="past-participe" href="#">J'ai participé aux</a>
                <a id="participe" href="#">je participerai aux</a>
                <a id="contribution" href="#">mes contributions</a>
                <a id="edit-profil" href="#">Gerer</a>
            </div>
            <section class="past-participe">






                <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <button>click Here <i class="fas fa-glasses"></i></button>

                </div>
            </section>
            <section class="participe">
                <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <button>click Here <i class="fas fa-glasses"></i></button>

                </div>


            </section>

            <section class="contribution">

           {{--
                @foreach($events as $event)
                <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> {{$event->nom}}</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <p>{{$event->date}}
                    </p>
                    <button><a href="{{ route('events.show', ['event' => $event->id ])}}">click Here <i class="fas fa-glasses"></i></button>

                </div>
                @endforeach --}}
            </section>

            @if($user->isAdmin())
            <section class="edit-profil">
                <form action="{{ route('theme.store') }}" method="post" class="form-edit">
                    @csrf
                    <section class="information-personnelle">
                        <legend>Fonctions d'ajout pour admin</legend>
                        <div class="label-input">
                            <label for="nom">Theme</label>
                            <input type="text" name="nom" id="nom" />
                        </div>
                        <div class="submit">
                            <button type="submit"><i class="fas fa-check"></i> Ajouter</button>
                        </div>
                    </form>
                    <form action="{{ route('upgrade_contributeur') }}" method="POST" class="form-edit">
                      @csrf
                        <div class="label-input">
                          <label for="nom">Contributeur</label>
                            <select name="contributeur">
                                @foreach ($users as $user )

                                <option value="{{ $user->id }}">{{$user->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="submit">
                            <button type="submit"><i class="fas fa-check"></i> Ajouter</button>
                        </div>
                    </section>
                    <section>
                    </form>
                 <form action ="{{ route('theme_destroy')}}"  method="POST" class="form-edit">
                        @csrf
                        @method('DELETE')
                        <section class="information-personnelle" >
                            <legend>Fonctions de suppression pour admin</legend>
                            <div class="label-input">
                                <label for="theme">Theme</label>

                                <select name="theme" id="theme">
                                    @foreach ($themes as $theme )
                                    <option value="{{ $theme->theid }}">{{$theme->title}}</option>
                                    @endforeach
                                </select>
                                <div class="submit">
                                    <button type="submit"><i class="fas fa-check"></i>Delete</button>
                                </div>
                            </div>
                </form>

                    <form action ="{{ route('contributeur_destroy')}}"  method="POST" class="form-edit">
                      @csrf
                      @method('DELETE')

                      <div class="label-input">
                                    <label for="contributeur">contributeur</label>
                                    <select name="contributeur">
                                        @forelse ($contribiteursUsers as $user )

                                        <option value="{{ $user->id }}">{{$user->name}}</option>

                                        @endforeach
                                    </select>
                        </div>
                                <div class="submit">
                                    <button type="submit"><i class="fas fa-check"></i>Delete</button>
                                </div>
                    </form>



                        </section>
                        @endif

                        @if($user->isContributeur() || $user->isAdmin())
                        <p>Ajouter un évenement :</p>
                        @include('inc/messages')
                        <form action="{{ route('events.store') }}" method="post" class="form-event" enctype="multipart/form-data">
                            @csrf
                            <section class="add-event">
                                <legend>Information sur l'évenement</legend>
                                <div class="label-input">
                                    <label for="title">Titre</label>
                                    <input type="text" name="title" id="title" />
                                </div>
                                <div class="label-input">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date_event" />
                                </div>


                                <div class="label-input">
                                    <label for="image">Ajouter une image</label>
                                    <input type="file" name="image" id="image" />
                                </div>
                                <div class="label-input">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                                <div class="label-input">
                                    <label for="theme">Theme</label>

                                    <select name="theme" >
                                        @foreach ($themes as $theme )
                                        <option>{{$theme->title}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </section>
                            <section class="adresse">
                                <legend>Informations sur l'adresse</legend>
                                <div class="label-input">
                                    <label for="nom_r">Nom de la rue</label>
                                    <input type="text" name="nom_r" id="nom_r" />
                                </div>
                                <div class="label-input">
                                    <label for="ville">Ville</label>
                                    <input type="text" name="ville" id="ville" />
                                </div>
                                <div class="label-input">
                                    <label for="code_postal">Code postal</label>
                                    <input type="text" name="code_postal" id="code_postal" />
                                </div>
                                <div class="label-input">
                                    <label for="cmp_adr">Complément d'adresse</label>
                                    <textarea id="cmp_adr" name="cmp_adr"></textarea>
                                </div>
                            </section>
                            <section class="submit">
                                <button type="submit"><i class="fas fa-check"></i> Ajouter évenement</button>
                            </section>
                        </form>
                        @endif
                    </section>

                </article>
                {{ $events->links() }}
            </body>
            <script src="{{asset('js/profile.js')}}"></script>




            @endsection
