<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::selectEtudiants();
               

           // return $etudiants;
        return view('etudiants.index', ['etudiants' => $etudiants]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $villes = Ville::selectVilles();

        return view('etudiants.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/* return $request; */
        $newPost = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id            
           
        ]);


        $etudiants = Etudiant::selectEtudiants();
        $message = 'Enregistrement de l\'étudiant "'.$newPost->nom.'" (ID: '.$newPost->id.') avec succès';
        return redirect(route('etudiants.index', ['etudiants' => $etudiants]))->withSuccess($message);
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
         $etudiant = Etudiant::findOrFail($id);
         $villes = Ville::selectVilles();
        return view('etudiants.edit', ['etudiant' => $etudiant, 'villes' => $villes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Etudiant $etudiant)
    {
       
         $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id            
           
        ]);
        $etudiants = Etudiant::selectEtudiants();
        $message = 'Modification de l\'étudiant "'.$etudiant->nom.'" (ID: '.$etudiant->id.') avec succès';
        return redirect(route('etudiants.index', ['etudiants' => $etudiants]))->withSuccess($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Rechercher l'étudiant par son ID
        $etudiant = Etudiant::findOrFail($id);
       // Sauvegarder l'ID et le nom de l'étudiant avant la suppression
        $etudiantId = $etudiant->id;
        $etudiantNom = $etudiant->nom;

        // Vérifier si l'étudiant a été supprimé
        if ($etudiant->delete()) {
            // Suppression réussie avec l'ID et le nom de l'étudiant
            $message = 'Étudiant '.$etudiantNom.' (ID: '.$etudiantId.') supprimé avec succès';
            $etudiants = Etudiant::selectEtudiants();
            return redirect(route('etudiants.index', ['etudiants' => $etudiants]))->withSuccess($message);
        } 
    }
}
