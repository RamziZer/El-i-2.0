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
    </head>

<body>

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

</body>

</html>
