<?php

class Aluno{
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $dataNasc;
    private $frequencia;
    private $universidade;

    public function __construct($nome = null, $cpf = null, $email = null, $tel = null, $data = null, $uni = null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $tel;
        $this->dataNasc = $data;
        $this->frequencia = [];
        $this->universidade = $uni;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * @param mixed $dataNasc
     */
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    /**
     * @return mixed
     */
    public function getFrequencia()
    {
        return $this->frequencia;
    }

    /**
     * @param mixed $frequencia
     */
    public function setFrequencia($frequencia)
    {
        array_push($this->frequencia, $frequencia);
    }

    /**
     * @return mixed
     */
    public function getUniversidade()
    {
        return $this->universidade;
    }

    /**
     * @param mixed $universidade
     */
    public function setUniversidade($universidade)
    {
        $this->universidade = $universidade;
    }
}