@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="<?php echo asset('form.css'); ?>" type="text/css">
<html>
<body>
  <div class="container">
    @error('email')
		    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
    <div class="title">Connexion</div>
    <div class="content">
      <form action="{{ route('login') }}" method="post">
       @csrf
        <div class="user-details">
         
          <div class="input-box">
            <label for="email" class="details">Courriel</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Entrez votre courriel" required>
          </div>
          

          <div class="input-box">
            <label for="password" class="details">Mot de passe</label>
            <input id="password" name="password" type="password" placeholder="Entrez votre mot de passe" required>
          </div>
        </div>
      
        </div>
        <div class="button">
          <input type="submit" value="Connexion">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
@endsection
