@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscrption</h1>
    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Age</label>
            <input type="text" name="age" id="age" class="form-control" required>
       
        <button type="submit" class="btn btn-primary">ajouter etudiant</button>
    </form>
</div>

@endsection
