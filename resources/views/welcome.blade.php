<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','El-i')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
        @extends('layout')

@section('content')

    <section id="showcase">
        <div class="container">

        <h1>Faire partager des expériences en direct</h1>

        </div>

    </section> 
    <section id="showcase2">
            <div class="container">
    
                <p>Evarois est une plateforme spécialisée dans les expériences partagées qui permet à chaque habitant de la région var provance côté dazure  de créer, partager, trouver et participer à des événements qui nourrissent ses passions et enrichissent ses expériences. Festivals de musique, marathons, conférences, rassemblements communautaires, concours de jeux ou encore de guitare, notre mission est de rassembler les gens  autour d'expériences partagées.</p>            
            </div>
    
             <!--  </section>   
    <section id="newsletter">
            <div class="container">
                <h1>welocome to newsletter </h1>
                <form>
                    <input type="email" placeholder="Enter Email...">
                    <button type="submit" class="boutton1">Qubscribe</button>


                </form>
                


            </div>



    </section> -->

    <section id="theboxes">
            <div class="column">
                    <img src="{{ asset('css/img/box1.png') }}">
                    <h1>Les Meilleurs Outils de Planification d’Évènements </h1>
                    <p>siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
            </div>
            <div class="column">
                    <img src="{{ asset('css/img/box2.png') }}">
                    <h1>Le monde vous tend les bras </h1>
                    <p>Rejoignez un groupe local pour rencontrer du monde, tester une nouvelle activité ou partager vos passions.</p>
            </div>
            <div class="column">
                    <img src="{{ asset('css/img/box3.png') }}">
                    <h1>Transformez votre événement en expérience </h1>
                    <p>Proposez à vos participants une belle expérience  et un enregistrement rapide par le biais de nos applis mobiles, ainsi que des équipements, du personnel et des solutions logistiques sur place.</p>
            </div>

    </section>



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
@endsection