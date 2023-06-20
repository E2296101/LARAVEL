<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichier;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichiers = Fichier::liste_fichiers();
        return view('fichiers.index',["fichiers" => $fichiers ]);
    }

    public function showUploadForm()
    {
        return view('fichiers.upload');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required',
            'chemin' => 'required|file',
        ]);

        // Récupérer le fichier uploadé
        $file = $request->file('chemin');
        

        // Générer un nom unique pour le fichier
        $filename = uniqid().'.'.$file->getClientOriginalExtension();

        // Déplacer le fichier vers le répertoire de destination
        $file->move(public_path('files'), $filename);

        $validatedData['date_upload'] = Carbon::now()->format('Y-m-d H:i:s');
        $validatedData['etudiant_id'] = Auth::id();
        $validatedData['chemin'] = 'files/'.$filename; 

        $file = Fichier::create($validatedData);

    
        return redirect()->route('fichiers.index')->with('success', 'Le fichier a été téléchargé avec succès.');
    }

    public function telecharger($id)
    {
        $fichier = Fichier::findOrFail($id);

        // Obtenez le chemin de stockage du fichier
        $cheminFichier = $fichier->chemin ;
        $nomFichier = basename($cheminFichier);

        // Téléchargement du fichier
          return response()->download($cheminFichier, $nomFichier);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}