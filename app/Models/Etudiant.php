<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    static public function selectEtudiants(){
        $query = Etudiant::join('villes', 'etudiants.ville_id', '=', 'villes.id')
                ->select('etudiants.*', 'villes.nom AS ville')
                 ->orderBy('nom')
                ->paginate(10);
        return $query;
    }


    protected $fillable = [
            'nom' ,
            'adresse' ,
            'email' ,
            'phone' ,
            'date_naissance',
            'ville_id'     
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
