<?php
$jsonFileName = 'mails-s.json';
$jsonString = file_get_contents($jsonFileName);
$data = json_decode($jsonString, true);
array_push($data, $_GET["email"]);
$newJsonString = json_encode($data);
file_put_contents($jsonFileName, $newJsonString);
header("Location: https://albeyruti.com/");
exit;
