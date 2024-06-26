<?php
header('Content-Type: application/json');

$jsonData = file_get_contents('./dischi.json');

$decodedJson = (!is_null($jsonData)) ? json_decode($jsonData, true) : [];


echo json_encode(($decodedJson));