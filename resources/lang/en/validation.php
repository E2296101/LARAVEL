<?php
// resources/lang/en/validation.php

return [
    'required' => 'The :attribute field is required.',
    'min' => [
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'max' => [
        'string' => 'The :attribute may not be greater than :max characters.',
    ],
    'regex' => 'The :attribute format is invalid (### ###-####).',
    'date' => 'The :attribute must be a valid date.',
    'exists' => 'The selected :attribute is invalid.',
    'email' => 'The :attribute must be a valid email address.',
    'unique' => 'The :attribute has already been taken.',
    'password' => 'The :attribute must be at least :min characters.',
     'same' => 'The :attribute and :other must match.',
    'mimes' => 'File not supported (PDF, ZIP or DOC).',
];
