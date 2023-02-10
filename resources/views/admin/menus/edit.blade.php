@extends('layouts.Admin.app')
@section('title', 'Modifier un Menu')
@section('content')

    <style>

    </style>
    <h1>MODIFIER UN MENU</h1>
    <div class="container form-group abs-center ">
        <form action="{{ route('admin.menus.update', $menu->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom Menu</label>
                <input id="name" name="menu_name" type="text"
                    class="form-control @error('menu_name') is-invalid @enderror">

                @error('menu_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="semaine" class="form-label">Semaine</label>
                <input id="semanine" name="menu_week" type="text"
                    class="form-control @error('menu_week') is-invalid @enderror">

                @error('menu_week')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="plat" class="form-label">Plats:</label>
                <select class="basic-single" name="dish_id">
                    @foreach ($dishes as $dish)
                        <option value="{{ $dish->id }}"> {{ $dish->dish_name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="sauvegarder" class="btn btn-primary">
            <a href="{{ route('admin.menus.index') }}" class="buttonRetour">Retour</a>
    </div>

@endsection
