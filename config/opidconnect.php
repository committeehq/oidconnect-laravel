<?php

return [
    'myoidc' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => env('APP_URL') . '/auth/callback',
        'auth' => 'https://opidc.provider/auth',
        'token' => 'https://opidc.provider/token',
        'keys' => 'https://opidc.provider/keys',
        'scopes' => [],
        'guzzle' => [],
        'response_type' => 'code id_token',
    ],
];
