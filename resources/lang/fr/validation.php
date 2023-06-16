<?php
// resources/lang/validation.php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'min' => [
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
    ],
    'max' => [
        'string' => 'Le champ :attribute ne peut pas dépasser :max caractères.',
    ],
    'regex' => 'Le numéro de télephone est invalide (### ###-####).',
    'date' => 'Le champ :attribute doit être une date valide.',
    'exists' => 'La valeur sélectionnée pour :attribute est invalide.',
    'email' => 'Le champ :attribute doit être une adresse couriel valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'password' => 'Le mot de passe doit contenir au moins :min caractères.',
    'same' => 'Le champ mot de passe de confirmation  et mot de passe doivent correspondre.',
];

