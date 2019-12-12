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
    <article>
     <img src="/home/hririche/git/el-i/ProjetWebL3/profile-img.png">
     <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
     <ul>
         <li style="font-family: 'Alatsi', sans-serif; font-size: 19px;">{{ $user->name }}</li>
         {{-- <li style="font-family: 'Righteous', cursive; font-size:27px"> {{$user->first_name}} & prenom</li> --}}
         {{-- <li style="font-family: 'Amatic SC', cursive; font-size:25px" ><i class="fas fa-globe-africa"></i> adresse + icon </li> --}}

     </ul>

    <div class="liens">

        <a class="active" id="apropos" href="#"> information personnelle</a>
        <a id="apropos2" href="#">J'ai participé aux</a>
        <a id="apropos3" href="#">je participerai aux</a>
        <a id="contribuer" href="#">mes contributions</a>

        <a id="edit-profil" href="#">Modifier Profil</a>





    </div>
    <section class="apropos">
        <div class="box">
            <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
            <img src="./img/nimg.jpg">
            <button>click Here <i class="fas fa-glasses"></i></button>

        </div>


        <div class="box">
                <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                <img src="./img/nimg.jpg">
                <button>click Here <i class="fas fa-glasses"></i></button>

            </div>



            <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <button>click Here <i class="fas fa-glasses"></i></button>

                </div>
    </section>
    <section class="apropos2">
            <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <button>click Here <i class="fas fa-glasses"></i></button>

                </div>


                <div class="box">
                        <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                        <img src="/home/hririche/git/el-i/img/nimg.jpg">
                        <button>click Here <i class="fas fa-glasses"></i></button>

                    </div>



                    <div class="box">
                            <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                            <img src="/home/hririche/git/el-i/img/nimg.jpg">
                            <button>click Here <i class="fas fa-glasses"></i></button>

                        </div>
    </section>

    <section class="apropos3">
            <div class="box">
                    <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                    <img src="/home/hririche/git/el-i/img/nimg.jpg">
                    <button>click Here <i class="fas fa-glasses"></i></button>

                </div>


                <div class="box">
                        <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                        <img src="/home/hririche/git/el-i/img/nimg.jpg">
                        <button>click Here <i class="fas fa-glasses"></i></button>

                    </div>



                    <div class="box">
                            <h2 style="font-family: 'Lato', sans-serif;"> title event</h2>
                            <img src="/home/hririche/git/el-i/img/nimg.jpg">
                            <button>click Here <i class="fas fa-glasses"></i></button>

                        </div>
    </section>

    @if($user->isContributeur() || $user->isAdmin())
   <section class="edit-profil">
            <form action="" method="post" class="form-edit">
                <section class="information-personnelle">
                    <legend>Fonctions d'ajout pour admin</legend>
                    <div class="label-input">
                        <label for="nom">Theme</label>
                        <input type="text" name="nom" id="nom" />
                    </div>
                    <div class="label-input">
                        <label for="Add-cont">contributeur</label>
                        <input type="text" name="" id="" />
                    </div>
                    <div class="submit">
                        <button type="submit"><i class="fas fa-check"></i> Ajouter</button>
                    </div>
                </section>
                <section>
                    <form action="" method="post" class="form-edit">
                        <section class="information-personnelle">
                            <legend>Fonctions de suppression pour admin</legend>
                            <div class="label-input">
                                <label for="nom">Theme</label>
                                <input type="text" name="nom" id="nom" />
                            </div>
                            <div class="label-input">
                                <label for="Add-cont">contributeur</label>
                                <input type="text" name="" id="" />
                            </div>
                            <div class="submit">
                                <button type="submit"><i class="fas fa-check"></i>Supprimer</button>
                </section>

            </form>
        </section>
  @endif

          @if($user->isAdmin())
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

</body>




@endsection
