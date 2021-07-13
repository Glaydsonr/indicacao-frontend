<?php

require 'config/Rest.php';

$response = new Rest();
$url = $response->store();

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
curl_exec($ch);
curl_close($ch);