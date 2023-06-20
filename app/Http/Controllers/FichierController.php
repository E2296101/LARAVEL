<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichier;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'titre_fr' => 'required|min:2|max:50',
            'titre_en' => 'required|min:2|max:50',
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
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $fichier = Fichier::findOrFail($id);


      // Vérifier si l'article existe
        if (!$fichier) {
            return redirect(route('fichiers.index'))->withError(trans('forum.message_error_file_not_found'));
        }

        // Vérifier si l'utilisateur est autorisé à modifier l'article
        if ($fichier->etudiant_id != Auth::id()) {
            return redirect(route('fichiers.index'))->withError(trans('forum.message_error_user_not_authorized'));
        }         
         /* return $fichier; */
        return view('fichiers.edit',["fichier" => $fichier ]);

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

          $fichier = Fichier::findOrFail($id);
        // Vérifier si l'article existe
                if (!$fichier) {
                    return redirect(route('fichiers.index'))->withError(trans('forum.message_error_file_not_found'));
                }

                // Vérifier si l'utilisateur est autorisé à modifier l'article
                if ($fichier->etudiant_id != Auth::id()) {
                    return redirect(route('fichiers.index'))->withError(trans('forum.message_error_user_not_authorized'));
                }       

     // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre_fr' => 'required|min:2|max:50',
            'titre_en' => 'required|min:2|max:50',
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

        $updated = $fichier->update($validatedData);

         if ($updated) {
            return redirect(route('fichiers.index'))->withSuccess(trans('file.text_success_file_update'));
        } else {
            return redirect(route('fichiers.index'))->withError(trans('file.text_error_file_update'));
        }

    
      /*   return redirect()->route('fichiers.index')->with('success', 'Le fichier a été téléchargé avec succès.'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fichier = Fichier::findOrFail($id);
      
        if ($fichier->etudiant_id  != Auth::id()) {
            // L'étudiant n'est pas autorisé à supprimer cet article
            return redirect(route('fichiers.index'))->withError(trans('forum.message_error_user_not_authorized'));
        }
         $cheminFichier = public_path($fichier->chemin);

         if($fichier->delete()){
           // Supprimer le fichier du dossier local
            if (File::exists($cheminFichier)) {
                File::delete($cheminFichier);
            }
            $fichiers = Fichier::liste_fichiers();
            return redirect(route('fichiers.index'))->with(['fichiers' => $fichiers])->withSuccess(trans('forum.message_success_file_deleted'));
         }
        else
            return redirect(route('forum.index'))->withError(trans('forum.message_error_file_deleted'));
    }
}