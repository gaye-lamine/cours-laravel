<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        

        $request->validate([
            'nom' => 'required|string|max:255',
            'age' => 'required'
        ]);

        
        // creation d'un etudiant
        Etudiant::create($request->all());

        return redirect()->route('etudiants.create')->with('success', 'Etudiant ajouté avec succès.');

    }

    public function index() {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    public function destroy($id){
        $etudiant = Etudiant::findOrFail($id);//recherche l'etudiant selon l'id
        $etudiant->delete();
        return redirect()->route('etudiants.index')->with('success', 'Etudiant supprimé avec succès.');
    }

    public function edit($id){
        $etudiant = Etudiant::findOrFail($id);// recherche l'etudiant selon l'id
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, $id){
        $etudiant = Etudiant::findOrFail($id);// recherche l'etudiant selon l'id
        $request->validate([
            'nom' => 'required|string|max:255',
            'age' => 'required'
        ]);
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index')->with('success', 'Etudiant modifié avec succès.');
    }
    
}
