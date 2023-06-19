<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;
use App\Models\Etudiant;
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $villeIds = Ville::pluck('id');

        return [
            'nom' => $this->faker->lastName,
            'adresse' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'date_naissance' => $this->faker->date,
            'ville_id' => $this->faker->randomElement($villeIds),
        ];
    }
}
