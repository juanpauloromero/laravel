@extends('layouts.Admin.app')
@section('title', 'Ajouter un Utilisateur')
@section('content')

    <h1>AJOUTER UN UTILISATEUR</h1>

    <div class="container form-group abs-center">
        <div class="mb-3">
            <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input id="prenom" name="user_firstname" type="text"
                        class="form-control @error('user_firstname') is-invalid @enderror">

                    @error('user_firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nomdefamille" class="form-label"> Nom de famille</label>
                    <input id="nomdefamille" name="user_lastname" type="text"
                        class="form-control @error('user_lastname') is-invalid @enderror">

                    @error('user_lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label"> Adresse</label>
                    <textarea id="adresse" name="user_adresse" class="form-control @error('user_adresse') is-invalid @enderror"></textarea>

                    @error('user_adresse')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Email address:</label>
                    <input id="email" name="email" type="email"
                        class="form-control @error('email') is-invalid @enderror">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telephone">Numero de Telephone:</label>
                    <input id="telephone" name="user_phone" type="telephone"
                        class="form-control @error('user_phone') is-invalid @enderror">

                    @error('user_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password">Mot de passe:</label>
                    <input id="password" name="password" type="password"
                        class="form-control @error('password')is-invalid @enderror">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select id="role" name="role_id" type="text" class="form-select">
                        <option value="1" selected>Administrateur</option>
                        <option value="3" selected>Super-User</option>
                    </select>
                </div>
                <div>
                    <div> <input type="submit" value="Enregistrer" class="btn btn-primary">
                        <a href="{{ route('admin.admin.index') }}" class="buttonRetour">Retour</a>

                    </div>
                </div>
        </div>
        </body>

    @endsection
