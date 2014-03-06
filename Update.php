<?php
header('Content-type: application/json; charset=utf-8');
$data = array( 'apple', 'orange', 'strawberry', 'lemon', 'pear' );
echo json_encode( $data );
?>
