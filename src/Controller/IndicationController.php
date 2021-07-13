<?php

include 'src/config/Rest.php';

class IndicationController
{
    public function index()
    {
        $response = new Rest();
        $url = $response->list();

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($ch));

        require 'view/index.php';
    }
}