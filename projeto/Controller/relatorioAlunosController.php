<?php

$input = json_decode(file_get_contents('php://input'));


header('Content-Type: application/json');
echo json_encode($input);