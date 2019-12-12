<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viweport" content="width=device-width">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/eventpage.css')}}">
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
                
                <meta name="csrf-token" content="{{ csrf_token() }}">
            
        
                <link rel="stylesheet" href="{{asset('css/footer1.css')}}">
                <link rel  ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://kit.fontawesome.com/f02947e5f2.js" crossorigin="anonymous"></script>
         </head>
        
        <body>
        
            <header>
                <div class="container">
                <div id="logo">
                <img src="{{ asset('css/img/logo_transparent-2.png') }}">
        
                </div>
        
                <nav>
        
                    <ul>
                        <li><a href="/"> HOME</a></li>
                        <li><a href="/search"> RECHERCHE</a></li>
                      @guest
                        <li><a href="{{ route('login') }}">Sing UP/IN</a></li>
                      @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('profile.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
        
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                      @endguest
        
                    </ul>
        
        
                </nav>
        
        
                </div>
        
        
            </header>

    <div class="gird-container">
        <div class="gird-item gird-item-1 image">
        </div>  
        <div class="gird-item gird-item-2">
            <h1>{{$events->nom}}</h1>
        {{$events->descriptif}}
       </div>  

        <div class="gird-item gird-item-3">
        <h1>Infos event</h1>
        <div class="infos">
        <ul>
            <li>Date : {{$events->date}}</li>
            <li>Thème : {{$events->theme}}</li>
            <li>Ville: {{$events->ville}}</li>
            <li>Adresse : {{$events->nom_rue}} </li>
            <li>Effectif Max : {{$events->effectif_max}}</li>
            <li>Date d'ajout :  {{$events ->created_at }}</li>
        </ul>
        </div>
        <div class="location">
        </div> 
        </div>  
        <div class="gird-item gird-item-4 inscrire">
            <button>s’inscrire / se désinscrire d'un événement</button> <br>
            <div class="rat">
                <form class="stars" action="">
                        <p>Rating system</p>

                        <input type="radio" class="star star-5" id="star-5" name="star">

                        <label for="star-5" class="star star-5"></label>

                        <input type="radio" name="star" class="star star-4" id="star-4">

                        <label for="star-4" class="star star-4"></label>

                        <input type="radio" name="star" class="star star-3" id="star-3">

                        <label for="star-3" class="star star-3"></label>
                        
                        <input type="radio" name="star" class="star star-2" id="star-2">

                        <label for="star-2" class="star star-2"></label>

                        <input type="radio" name="star" class="star star-1" id="star-1">

                        <label for="star-1" class="star star-1"></label>
                    </form>
            </div>

        </div>  
    </div>
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
</body>

</html>
