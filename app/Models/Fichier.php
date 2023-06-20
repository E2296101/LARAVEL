<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    static function liste_fichiers(){
    $fichiers = Fichier::select('fichiers.*', 'etudiants.nom AS nom_etudiant')
        ->join('etudiants', 'fichiers.etudiant_id', '=', 'etudiants.id')
        ->orderBy('date_upload', 'desc')
        ->get();
    return $fichiers;
    }

        protected $fillable = [
        'id',
        'titre',
        'chemin',
        'date_upload',
        'etudiant_id',
    ];
}
