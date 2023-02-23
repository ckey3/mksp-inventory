<?php

//get POST data (json)
$json = file_get_contents('php://input');
//Converts it into PHP object
$data = json_decode($json);

//sends data back to the client that sent it
echo json_encode($data);

$file = fopen("orderData", "a");
fwrite($file, json_encode($_POST),"\n");
fclose($file);

?>