<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    static function liste_articles(){
    $articles = Article::select('articles.*', 'etudiants.nom AS nom_etudiant')
        ->join('etudiants', 'articles.etudiant_id', '=', 'etudiants.id')
        ->orderBy('date_publication', 'desc')
        ->get();
    return $articles;
    }

    protected $fillable = [
        'id',
        'titre',
        'contenu_fr',
        'contenu_en',
        'date_publication',
        'etudiant_id',
    ];

    
}
