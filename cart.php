<?php

echo json_encode([
    'success' => true,
    'error' => false, 
    'status_code' => 200,
    'response' => [
        'cart_id' => '4BEE1931-49E8-94BE-672F-01933E978FF4',
        'owner' => [
            'account_id' => null
        ],
        'items' => array_map(function($item) {
            return [
                'shop_cart_item_id' => uniqid(),
                'product' => [
                    'id' => $item['product_id'],
                    'name' => 'Entry Ticket ',
                    'type' => 1
                ],
                'totals' => [
                    'amount' => 149,
                    'due' => null,
                    'discount' => 0,
                    'tax' => 7.1,
                    'quantity' => $item['quantity']
                ]
            ];
        }, json_decode(file_get_contents('php://input'), true)['items'] ?? []),
        'promotions' => [
            'available' => false,
            'list' => null
        ],
        'totals' => [
            'amount' => 149,
            'due' => 149,
            'discount' => 0,
            'tax' => 7.1,
            'quantity' => 1
        ],
        'status' => null
    ],
    'vgs_session_id' => '9E46B1C264462E3F8D12A5C2511754B5',
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
        'self' => 'https://museumofthefuture.ae/cart.php'
    ],
    'transformed' => true
]);
