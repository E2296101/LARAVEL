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
    'exists' => 'Le courriel ou le password est invalide.',
    'email' => 'Le champ courriel doit être une adresse couriel valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'password' => 'Le mot de passe doit contenir au moins :min caractères.',
    'same' => 'Le champ mot de passe de confirmation  et mot de passe doivent correspondre.',
    'mimes' => 'Fichier non supporté (PDF, ZIP ou DOC).',
];

