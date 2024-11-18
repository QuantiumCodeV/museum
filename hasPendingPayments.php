<?php

echo json_encode([
    'success' => true,
    'error' => false,
    'status_code' => 200,
    'response' => [
        'success' => true,
        'hasPending' => false
    ],
    'vgs_session_id' => '5E374454CB49495C5520FAF2FAE2587C',
    'csrf_token' => 'a3J5HW2gQwawsTtuN5EBa1fFA3qwLuCNSqJ4Q0xt',
    'auth' => [
        'user' => null,
        'google' => [
            'redirect_url' => 'https://museumofthefuture.ae/auth/google/redirect'
        ],
        'facebook' => [
            'redirect_url' => 'https://museumofthefuture.ae/auth/facebook/redirect'
        ]
    ],
    'locale' => 'en',
    'links' => [
        'self' => 'https://museumofthefuture.ae/api/v1/ticketing/account/41234sa@mail.rqw/hasPendingPayments'
    ],
    'transformed' => true
]);