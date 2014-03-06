<?php
header('Content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
 
$data = array( 'apple', 'orange', 'strawberry', 'lemon', 'pear' );
$json = json_encode($data);
 
echo isset($_GET['callback'])
 ? "{$_GET['callback']}($json)"
 : $json;
?>
