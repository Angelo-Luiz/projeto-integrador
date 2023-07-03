<?php

class Universidade{

    private $nome;
    private $sigla;
    private $cidade;

    public function __construct($nome = null, $sigla = null, $cidade = null){
        $this->nome = $nome;
        $this->sigla = $sigla;
        $this->cidade = $cidade;
    }

    /**
     * @return mixed|null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed|null $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed|null
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param mixed|null $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return mixed|null
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed|null $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }



}

?>