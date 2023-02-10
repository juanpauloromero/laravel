<link rel="stylesheet" href="<?php echo asset('header.css'); ?>" type="text/css">
<script type="text/javascript" src="{{ URL::asset('home.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer>
</script>

@include('layouts.template.header')

<div class="livraison">
    <p class="texte-livraison">Livraison gratuite à domicile </p>

    <button type="delete" class="delete-livraison"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">

            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg></button>
</div>

@if (Session::has('mealadd'))
    <div class="alert alert-success  d-flex justify-content-between align-items-center" id="livraison1">
        {{ Session::get('mealadd') }}
        <button type="button" class="close btn btn-link text-decoration-none" id="delete-livraison1"><span
                class="text-success">X</span></button>
    </div>
@endif
<img class="banniere" src="{{ asset('pexels-pixabay-326281.jpg') }}" alt="Banniere">
<h1 class="week"> Semaine du 11 septembre 2022</h1>
@if (Session::has('mealadd'))
    <div class="alert alert-success  d-flex justify-content-between align-items-center" id="livraison1">
        {{ Session::get('mealadd') }}
        <button type="button" class="close btn btn-link text-decoration-none" id="delete-livraison1"><span
                class="text-success">X</span></button>
    </div>
@endif
{{-- Boutton pour chaque repas  --}}
<div class="all-buttons d-flex flex-wrap gap-3 justify-content-center">

    @foreach ($dishes as $dish)
        {{-- <a href="{{ route('cart.meal.add', $dish->id) }}" class="card-button"> --}}

        <div class="card" style="width: 14rem;">
            <img src="{{ asset('storage/' . $dish->image) }}" class="card-img-top">
            <div class="card-body">
                <h2 class="card-title">{{ $dish->dish_name }}</h2>
                <a href="{{ route('dishes.show', $dish->id) }}">Voir detail produit</a><br>
                <a href="{{ route('cart.meal.add', $dish->id) }}">Ajouter au panier</a>
            </div>
        </div>

        {{-- </a> --}}
    @endforeach
</div>
<fieldset>

    <table class="price">
        <legend>Prix</legend>
        <tr>
            <td>
                <li>1 personne 14$</li>
            </td>
            <td>
                <li>4 personnes 32$</li>
            </td>
        </tr>
        <tr>
            <td>
                <li>2 personnes 24$</li>
            </td>
            <td>
                <li>5 personnes 37$</li>
            </td>

        </tr>
        <tr>

            <td>
                <li>3 personnes 30$</li>
            </td>
            <td>
                <li>6 personnes 42$</li>
            </td>
        </tr>
    </table>
</fieldset>
<div class="plat">
    <li>Votre commande doit contenir un minimum de 3 plats</li>
    <li>Maximum 2 plats par portion</li>
</div>
<br>

</div>



@include('layouts.template.footer')
