<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="<?php echo asset('header.css'); ?>" type="text/css">
    <script src="home.js"></script>
    <script type="text/javascript" src="{{ URL::asset('home.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>
<header>
    <img class="Logo" src="{{ asset('square.png') }}" alt="Logo Grill-O-Presto">
    <h1 class="texte-logo">Grill-O-Presto</h1>
    <?php if(Auth::user()){ ?>
    @csrf
    <div><a href="{{ route('logout') }}" class="connexion"><svg xmlns="http://www.w3.org/2000/svg" width="34"
                height="34" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                <path
                    d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
            </svg></a></button></div>
    <div><a href="{{ route('home.fidelities.index') }}" class="inscrire">Profile Client</a></div>
    <?php } else { ?>
    <div><a href="{{ route('home.fidelities.create') }}" class="inscrire">S'inscrire</a></div>
    <a href="{{ route('login') }}" class="connexion"><svg xmlns="http://www.w3.org/2000/svg" width="34"
            height="34" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
        </svg></a></button>
    <?php } ?>
    <button class="panier"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg></button>
</header>

<body>
    <div class="livraison">

        <p class="texte-livraison">Livraison gratuite à domicile </p>

        <button type="delete" class="delete-livraison"><svg xmlns="http://www.w3.org/2000/svg" width="26"
                height="26" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">

                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg></button>
    </div>
    <img class="banniere" src="{{ asset('pexels-pixabay-326281.jpg') }}" alt="Banniere">
    @if (Session::has('mealadd'))
        <div class="alert alert-success  d-flex justify-content-between align-items-center" id="livraison1">
            {{ Session::get('mealadd') }}
            <button type="button" class="close btn btn-link text-decoration-none" id="delete-livraison1"><span
                    class="text-success">X</span></button>
        </div>
    @endif

    {{-- Boutton pour chaque repas --}}

    <div class="all-buttons d-flex flex-wrap gap-3">
        <form method="POST" action="{{ route('cart.store') }}">
            @csrf
            <div class="row">
                @foreach ($dishes as $dish)
                    <a href="#" class="card-button">

                        <div class="card" style="width:12rem">
                            <img src="{{ asset('storage/' . $dish->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $dish->dish_name }}</h5>
                            </div>
                        </div>

                    </a>
                @endforeach
            </div>
            <label for="portion" class="form-label">Choix de portion</label>
            <select id="portion" name="portion" type="text" class="form-select">
                <option value="1" selected>1 personne - 14$/plat</option>
                <option value="2" selected>2 personnes - 24$/plat</option>
                <option value="3" selected>3 personnes - 30$/plat</option>
                <option value="4" selected>4 personnes - 32$/plat</option>
                <option value="5" selected>5 personnes - 38$/plat</option>
                <option value="6" selected>6 personnes - 42$/plat</option>
            </select>
            <button type="submit">Commander</button>
        </form>
    </div>
    <footer>
        <div class="footer">
            <br>
            <a href="">Nous joindre</a>
            <a href="">Terme et condition</a>
            <a href="">Politique du restaurant</a>
            <a href=""></a><br><br>
            grill-o-presto@bidon.ca<br>
            1-819-111-1111<br>
            1325 12e Avenue Nord<br>
            Sherbrooke , Québec , J1E 3P6 Canada<br>
            <i>© 2022 Grill-O-Presto. All rights reserved.</i>
        </div>
    </footer>
</body>

</html>
