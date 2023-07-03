<?php

class Funcionario{
    private $nomeCompleto;
    private $cargo;
    private $email;
    private $salario;
    private $endereco;
    private $dataAdmissao;
    private $ativo;
    private $telefone;
    private $cpf;

    public function __construct($nome = null, $cargo = null, $email = null, $salario = null, $endereco = null, $data = null, $ativo = null, $telefone = null, $cpf = null){
        $this->nomeCompleto = $nome;
        $this->cargo = $cargo;
        $this->email = $email;
        $this->salario = $salario;
        $this->endereco = $endereco;
        $this->dataAdmissao = $data;
        $this->ativo = $ativo;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
    }

    /**
     * @return mixed|null
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * @param mixed|null $nomeCompleto
     */
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    /**
     * @return mixed|null
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed|null $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed|null
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed|null $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed|null
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed|null $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed|null
     */
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * @param mixed|null $dataAdmissao
     */
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    /**
     * @return mixed|null
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed|null $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return mixed|null
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed|null $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed|null
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed|null $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }



}