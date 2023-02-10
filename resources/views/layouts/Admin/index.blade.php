@extends('layouts.Admin.app')

@section('title', 'Menu Admin')

@section('content')




    <h1>ADMINISTRATEURS GRILLE-O-PRESTO</h1>
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
                <th>Modifier</th>
                <th>Supprimer</th>
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
                            @if (Auth::user()->role->role_name == 'SuperUser')
                                <a href="{{ route('admin.users.edit', $user->id) }}" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="29" fill="currentColor"
                                        class="bi bi-pencil mb-3" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                </a>
                            @endif
                        </td>
                        <td>
                            @if (Auth::user()->role->role_name == 'SuperUser')
                                <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="mb-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" value="Supprimer" class="bi bi-trash3-fill"
                                        onclick="return myFunction();">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        </td>
                @endforeach
            </tbody>
        </table>
        </div>
    @else
        <p>Aucun Utilisateur à afficher pour le moment.</p>
    @endif
    @if (Auth::user()->role->role_name == 'SuperUser')
        <a href="{{ route('admin.users.create') }}" class="buttonAjout">Ajouter un Utilisateur</a>
    @endif

@endsection
