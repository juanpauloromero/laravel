@extends('layouts.Admin.app')
@section('title', 'Ajouter un Repas')
@section('content')


    <h1>AJOUTER UN REPAS</h1>


    <div class="container form-group  abs-center">
        <div class="mb-3">
            <form action="{{ route('admin.dishes.store', 'upload-image') }}" method="post" enctype="multipart/form-data"
                id="upload-image">
                @csrf
        </div>
        <div class="mb-3">
            <label for="name" class="form-label"> Nom du plat</label>
            <input id="name" name="dish_name" type="text"
                class="form-control @error('dish_name') is-invalid @enderror">

            @error('dish_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"> Description: ingredients</label>
            <textarea id="description" name="dish_description" class="form-control @error('dish_description') is-invalid @enderror"></textarea>
            @error('dish_description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Seleccioner une image:</label>
            <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Disponibilté du plat</label>
            <select id="is_active" name="is_active" type="text" class="form-select">
                <option value="1" selected>Disponible</option>
                <option value="0" selected>Non-disponible</option>
            </select>
        </div>

        <div class="mb-3">
            <a href="{{ route('admin.dishes.index') }}" class="buttonRetour" role="button"
                data-bs-toggle="button">Retour</a>
        </div>
        <div class=" mb-3">
            <div class="card">
                <div class="card-body">
                    <img id="preview-image-before-upload" alt="preview image">
                </div>
            </div>
        </div>
        <div>
            <input type="submit" value="sauvegarder" class="btn btn-primary">
        </div>

    </div>


@endsection
