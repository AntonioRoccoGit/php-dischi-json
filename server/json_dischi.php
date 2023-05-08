<?php
$json_string = file_get_contents("dischi.json");
$disk_array = json_decode($json_string, true);

header('Content-Type: application/json');
echo json_encode($disk_array);
