<?php
$id = !empty($_POST['id']) ? $_POST['id'] : '';

require 'config/Rest.php';
$response = new Rest();
$url = $response->update($id);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'PUT');
curl_exec($ch);
curl_close($ch);
