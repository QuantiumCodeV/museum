<?php

$adult_uuid = '';
if(isset($_POST['adult_uuid'])){
    $adult_uuid = $_POST['adult_uuid'];
}

$performance = array(
    'performance_id' => '3714F60C-06FD-5B5F-692F-018E3C7C996D', 
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

return json_encode($performance);
?>