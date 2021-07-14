<?php

class Rest
{
    private $apiUrl;
    private $headers;

    public function __construct()
    {
        $this->apiUrl = 'http://unissuam.test/api';
        $this->headers = array(
            'Content-Type' => 'application/json',
            'Accept' =>'application/json',
        );
    }

    /**
     * Retornar indicações
     */
    public function list(): string
    {
        return "{$this->apiUrl}/indications/";
    }

}