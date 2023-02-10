@extends('layouts.Admin.app')

@section('title', 'Liste des Clients')

@section('content')
    <h1>CLIENTS GRILLE-O-PRESTO</h1>
    @if (session('succes'))
        {{ session('succes') }}
    @endif
    @if ($users->count() > 0)
        <table class="container table">
            <thead>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Delete</th>

            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user_firstname }}</td>
                        <td>{{ $user->user_lastname }}</td>
                        <td>{{ $user->user_adresse }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->user_phone }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="mb-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="Supprimer" class="bi bi-trash3-fill"
                                    onclick="return myFunction();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun Utilisateur à afficher pour le moment.</p>
    @endif


@endsection
