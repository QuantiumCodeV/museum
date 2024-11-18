<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$adult_uuid = '';
$performance_id = '';

// Получаем данные из POST
$data = json_decode(file_get_contents('php://input'), true);


if (isset($data['adult_uuid']) && isset($data['performance_id'])) {
    $adult_uuid = $data['adult_uuid'];
    $performance_id = $data['performance_id'];

    $performance = array(
        'performance_id' =>  $performance_id,
        'products' => array(
            array(
                'name' => 'Entry Ticket',
                'product_id' => $adult_uuid,
                'product_code' => 'GA-ENT',
                'display_face_price' => 149,
                'display_price' => 149,
                'free_quantity' => 1,
                'max_quantity' => 75
            )
        )
    );

    echo json_encode($performance);
}
