<?php

$adult_uuid = '';
$performance_id = '';
if (isset($_POST['adult_uuid']) && isset($_POST['performance_id'])) {
    $adult_uuid = $_POST['adult_uuid'];
    $performance_id = $_POST['performance_id'];

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
