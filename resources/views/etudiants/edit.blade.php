@extends('layouts.app')

@section('content')
<div class="container">
    <h1>edit de profil</h1>
    <form action="{{ route('etudiants.update',$etudiant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required value="{{ $etudiant->nom }}">
        </div>
        <div class="form-group">
            <label for="name">Age</label>
            <input type="text" name="age" id="age" class="form-control" required value="{{ $etudiant->age }}">
       
        <button type="submit" class="btn btn-primary">modifier etudiant</button>
    </form>
</div>

@endsection
