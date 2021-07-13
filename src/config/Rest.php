<?php

class Rest
{
    private $apiUrl;
    private $headers;

    public function __construct()
    {
        $this->apiUrl = 'http://unisuam.test/api';
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
        return "{$this->apiUrl}/indications";
    }

    /**
     * Atualizar status
     *
     * @param int $id
     */
    public function update($id): string
    {
        return "{$this->apiUrl}/indications/{$id}/status";
    }

    /**
     * Deletar registro
     *
     * @param int $id
     */
    public function delete($id): string
    {
        return "{$this->apiUrl}/indications/{$id}";
    }

    /**
     * Criar registro
     *
     */
    public function store(): string
    {
        return "{$this->apiUrl}/indications";
    }
}