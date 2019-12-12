<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="{{asset('css/footer1.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 

        <script src="https://kit.fontawesome.com/f02947e5f2.js" crossorigin="anonymous"></script>    
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Alatsi|Righteous&display=swap" rel="stylesheet">     
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>profile web page </title>
</head>
<header>
        <div class="container">
        <div id="logo">

        <h1> le titre de  logo</h1>
        </div>

        <nav>

            <ul>

                <li><a href="/"> HOME</a></li>
                <li><a href="/search"> RECHERCHE</a></li>
                @if (Route::has('login'))
                @auth
                <a href="{{url('/home')}}"></a>
                @else 
                <li><a href="{{route('login')}}">Sing UP/IN</a></li>
                @endif
                @endauth

            </ul>


        </nav>


        </div>

        
    </header>

<body>
{{--     @include('inc.messages')
 --}}
    <article>
     <img src="/home/hririche/git/el-i/ProjetWebL3/profile-img.png">
     <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet"> 
     <ul>
         <li style="font-family: 'Alatsi', sans-serif; font-size: 19px;">@username</li>
         <li style="font-family: 'Righteous', cursive; font-size:27px"> Nom & prenom</li>
         <li style="font-family: 'Amatic SC', cursive; font-size:25px" ><i class="fas fa-globe-africa"></i> adresse + icon </li>

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
     
   <!--  <section class="edit-profil">
            <p>Modifier vos information</p>
            <h2>Edit Profile</h2>
            <form action="" method="post" class="form-edit">
                <section class="information-personnelle">
                    <legend>Informations personnelles</legend>
                    <div class="label-input">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" />
                    </div>
                    <div class="label-input">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" />
                    </div>
                    <div class="label-input">
                        <label for="civilite">Civilié</label>
                        <input type="text" name="civilite" id="civilite" />
                    </div>
                    <div class="label-input">
                        <label for="date_nai">Date naissance</label>
                        <input type="date" name="" id="" />
                    </div>
                    <div class="label-input">
                        <label for="tel">Numéro de télephone</label>
                        <input type="tel" name="tel" id="tel" />
                    </div>
                    <div class="label-input">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio"></textarea>
                    </div>
                </section>
                <section class="adresse">
                    <legend>Informations sur l'adresse</legend>
                    <div class="label-input">
                        <label for="num_r">Numéro de la rue</label>
                        <input type="number" name="num_r" id="num_r" />
                    </div>
                    <div class="label-input">
                        <label for="nom_r">Nom de la rue</label>
                        <input type="text" name="nom_r" id="nom_r" />
                    </div>
                    <div class="label-input">
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" />
                    </div>
                    <div class="label-input">
                        <label for="pays">Pays</label>
                        <input type="text" name="pays" id="pays" />
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
                <section class="information-compte">
                    <legend>Informations sur le compte</legend>
                    <div class="label-input">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo"/>
                    </div>
                    <div class="label-input">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="label-input">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" id="mdp"/>
                        <input type="password" name="Cmdp" id="Cmdp"/>
                    </div>
                </section>
                <section class="submit">
                    <button type="submit"><i class="fas fa-check"></i> Modifier</button>
                    <button type="reset"><i class="fas fa-times"></i> Annuler</button>
                </section>
            </form>
        </section>


        <section class="contribution">


            <h2>Contributions</h2>
            <p>Ici vous trouverer les contribution de l'utilisateur : </p>
                <section class="myevents">



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






                </section> -->
            <p>Ajouter un évenement :</p>
            @include('inc/messages')
            {{-- <form action="{{ route('search.search') }}" method="post" class="form-event"> --}}
 {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST' , 'class' => 'form-event' ]) !!}
                    
    
                <section class="add-event">
                    <legend>Information sur l'évenement</legend>
                    <div class="label-input">
{{--                         <label for="title">Titre</label>
                        <input type="text" name="title" id="title" required /> --}}
                        {{Form::label('title','Titre')}}
                        {{Form::text('title','',['id' => 'title','placeholder' => 'Title'])}}
                    </div>
                    <div class="label-input">
                        {{-- <label for="date_event">Date</label>
                        <input type="date" name="date_event" id="date_event" /> --}}
                        {{Form::label('date','Date')}}
                        {{Form::date('date','',['id' => 'date_event','placeholder' => 'Date'])}}
                    </div>
                    
                    
                    <div class="label-input">
                        <label for="image">Ajouter une image</label>
                        <input type="file" name="image" id="image" />
                    </div>
                    <div class="label-input">
                        {{-- <label for="description">Description</label> --}}
                        {{Form::label('description','Description')}}
                        {{-- <textarea name="description" id="description"></textarea> --}}
                        {{Form::textarea('description','',['id' => 'description','placeholder' => 'Description'])}}
                    </div>
                </section>
                <section class="adresse">
                    <legend>Informations sur l'adresse</legend>
                    <div class="label-input">
                        {{-- <label for="nom_r">Nom de la rue</label>
                        <input type="text" name="nom_r" id="nom_r" /> --}}
                        {{Form::label('nom_r','Nom de la rue')}}
                        {{Form::text('nom_r','',['id' => 'nom_r','placeholder' => 'Nom de la rue'])}}
                    </div>
                    <div class="label-input">
                        {{-- <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" /> --}}
                        {{Form::label('ville','Ville')}}
                        {{Form::text('ville','',['id' => 'ville','placeholder' => 'Ville'])}}
                    </div>
                    <div class="label-input">
                        {{-- <label for="code_postal">Code postal</label>
                        <input type="text" name="code_postal" id="code_postal" /> --}}
                        {{Form::label('code_postal','Code postal')}}
                        {{Form::text('code_postal','',['id' => 'code_postal','placeholder' => 'Code postal'])}}
                    </div>
                    <div class="label-input">
                       {{--  <label for="cmp_adr">Complément d'adresse</label> --}}
                       {{--  <textarea id="cmp_adr" name="cmp_adr"></textarea> --}}
                        {{Form::label('cmp_adr','Complément d\'adresse')}}
                        {{Form::textarea('cmp_adr','',['id' => 'cmp_adr','placeholder' => 'Complément d\'adresse'])}}
                    </div>
                </section>
                <section class="submit">
                    {{Form::submit('Ajouter',['class'=>'fas fa-check'])}}
                    {{-- <button type="submit"><i class="fas fa-check"></i> Ajouter évenement</button> --}}
                </section>
{{--             </form>
 --}}       
 {!! Form::close() !!}
     </section>    
    
    </article>
    
</body>


    <div class="footer">
    <div class="inner-footer">



        
            <div class="footer-items">

                    <h1>Evarois crée des possibles</h1>
                    <p> Evarois est une plateforme conçue pour trouver et créer des événements locales.
                         Les gens utilisent Evarois pour rencontrer de nouvelles personnes, apprendre de nouvelles
                          choses, trouver du soutien, sortir de leur zone de confort
                           et vivre leur passion, ensemble
                    </p>
        
        
        
        
                </div>
                



            <div class="footer-items">

                    <h2>Quick links </h2>
                    <div class="border"></div>
                    <ul>
                        <a href=""><li> contacter nourrissent</li></a>
                        <a href=""><li> Conditions</li></a>
                        <a href=""><li> Confidentialité </li></a>
                        <a href=""><li> Cookies </li></a>


                    </ul>
                    
        
        
        
        
            </div>
            <div class="footer-items">

                    <h2> Contacter Nous </h2>
                    <div class="border"></div>
                    <ul>
                       <li><i class="fas fa-map-marked-alt"></i> 1516 avenue augusstin fliche</li>
                       <li><i class="fas fa-sms"></i> +33-7-673-262-89</li> 
                       <li><i class="fas fa-envelope"></i> support@evarois.fr </li> 
                    </ul>
                    <div class="social-media">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>



                    </div>
                    
        
        
        
        
            </div>
            













    </div>
    <div class="footer-bottom">

            Copyright &copy; El i & Co 2019 , All right reserved.
        </div>            







</div>

   </html>
