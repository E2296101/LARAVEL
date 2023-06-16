<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    public $incrementing = false; // Indique que l'ID de l'étudiant ne doit pas être incrémenté automatiquement

    protected $primaryKey = 'id'; // Définit la clé primaire de l'étudiant sur la colonne 'id'

    protected $keyType = 'int'; // Définit le type de la clé primaire sur 'int'

    static public function selectEtudiants()
    {
        $query = Etudiant::join('villes', 'etudiants.ville_id', '=', 'villes.id')
            ->select('etudiants.*', 'villes.nom AS ville')
            ->orderBy('nom')
            ->paginate(10);
        return $query;
    }

    protected $fillable = [
        'id',
        'nom',
        'adresse',
        'phone',
        'date_naissance',
        'ville_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id'); // Spécifiez 'id' en tant que clé étrangère pour la relation
    }
}
