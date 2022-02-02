<?php 
//BASIC API - CONTROLLER v0.1a by !KANT. 2/2/2022

$url      = 'https://notify-api.line.me/api/notify';
$token    = 'xw8M94b4DtL34QZBiwFPL5J7pFezBae4fhp6xKZnZz0';
$headers  = [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer '.$token
            ];
$params     = 'สวัสดีจาก PHP..';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

$response = curl_exec($ch);

curl_close($ch);

// var_dump($response);

$result = json_decode($response,TRUE);

echo $result;

?>
