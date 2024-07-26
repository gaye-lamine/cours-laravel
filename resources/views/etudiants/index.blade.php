@extends('layouts.app')

@section('content')
<div class="container">
    <h1>la liste des etudiants</h1>

    <a href="{{ route('etudiants.create') }}" class="btn btn-primary mb-3">ajouter etudiant</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->age }}</td>
                    <td>
                        {{--  <a href="#" class="btn btn-warning btn-sm">Edit</a>  --}}
                        <form action="{{ route('etudiants.edit', $etudiant->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning btn-sm">Modifier</button>
                        </form>
                        <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
