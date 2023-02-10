@section('content')
    @extends('layouts.app')
    <link rel="stylesheet" href="<?php echo asset('header.css'); ?>" type="text/css">
    @if (session('succes'))
        {{ session('succes') }}
    @endif
    <header>
        <img class="Logo" src="{{ asset('square.png') }}" alt="Logo Grill-O-Presto">
        <h1 class="texte-logo">Grill-O-Presto</h1>
        <?php if(Auth::user()){ ?>
        @csrf
        <div>
            <a href="{{ route('logout') }}" class="connexion"><svg xmlns="http://www.w3.org/2000/svg" width="34"
                    height="34" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                    <path
                        d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
                </svg></a>
            </div>
        <div><a href="{{ route('home.fidelities.index') }}" class="inscrire">Profile Client</a></div>
        <?php } else { ?>
        <div><a href="{{ route('home.fidelities.create') }}" class="inscrire">S'inscrire</a></div>
        <a href="{{ route('login') }}" class="connexion"><svg xmlns="http://www.w3.org/2000/svg" width="34"
                height="34" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg></a></button>
        <?php } ?>
        <a href="{{ route('cart.final', ' ') }}" class="panier"> <svg xmlns="http://www.w3.org/2000/svg" width="30"
                height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg></a>
    </header>

    <body>

        <div class="d-flex justify-content-around align-items-center mt-5 mb-5">
            <div class="card mb-4">
                <div class="d-flex justify-content-center">
                    <h2>Profile</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Prénom</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->user_firstname }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nom</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->user_lastname }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Adresse</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->user_adresse }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Couriel</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Téléphone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->user_phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3"><a class="btn"
                        href="{{ route('home.fidelities.edit', Auth::user()) }}" role="button">Modifier</a></div>
            </div>

            <div>
                <h2 class="d-flex justify-content-center mb-4">Historique de Commande</h2>
                <table class="table">
                    <thead>
                        <th>Adresse Livraison</th>
                        <th>Prix</th>
                        <th>Plat</th>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td> {{ $order->order_adresse }} </td>
                                <td> {{ $order->order_total }} </td>
                                @foreach ($order->dishes as $dish)
                                    <td> {{ $dish->dish_name }} </td>
                                    </td>
                            </tr>
                        @endforeach
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <footer>
            <div class="footer">
                <a href=""></a><br>
                grill-o-presto@bidon.ca<br>
                1-819-111-1111<br>
                1325 12e Avenue Nord<br>
                Sherbrooke , Québec , J1E 3P6 Canada<br>
                <i>© 2022 Grill-O-Presto. All rights reserved.</i>
            </div>
        </footer>
    </body>
@endsection
