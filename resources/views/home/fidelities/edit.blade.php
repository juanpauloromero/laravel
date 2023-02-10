@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="<?php echo asset('form.css'); ?>" type="text/css">
@if (session('succes'))
        {{ session('succes') }}
    @endif
<body>
  <div class="container">
    <div class="title">Modifier votre compte</div>
    <div class="content">
      <form action="{{ route('home.fidelities.update', $user->id) }}" method="POST">
       @csrf
       @method('PUT')
        <div class="user-details">
          <div class="input-box">
            <label for="user_firstname" class="details">Prénom</label>
            <input id="user_firstname" name="user_firstname" type="text" placeholder="Entrez votre prénom" required>
          </div>
          <div class="input-box">
            <label for="user_lastname" class="details">Nom</label>
            <input id="user_lastname" name="user_lastname" type="text" placeholder="Entrez votre nom" required>
          </div>
          <div class="input-box">
            <label for="user_phone" class="details">Téléphone</label>
            <input id="user_phone" name="user_phone" type="text" placeholder="Entrez votre téléphone" required>
          </div>
          <div class="input-box">
            <label for="email" class="details">Courriel</label>
            <input id="email" name="email" type="email" placeholder="Entrez votre courriel" required>
          </div>
          <div class="input-box">
            <label for="user_adresse" class="details">Adresse</label>
            <input id="user_adresse" name="user_adresse" type="text" placeholder="Entrez votre adresse" required>
          </div>

          <div class="input-box">
            <label for="password" class="details">Mot de passe</label>
            <input id="password" name="password" type="password" placeholder="Entrez un mot de passe" required>
          </div>
        </div>
      
        </div>
        <div class="button">
          <input type="submit" value="Confirmer">
        </div>
      </form>
    </div>
  </div>

</body>
</html>