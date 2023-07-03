<?php

class Rotas{
    private $cidadePartida;
    private $cidadeChegada;
    private $distancia;

    public function __construct($partida = null, $chegada = null, $distancia = null){
        $this->cidadePartida = $partida;
        $this->cidadeChegada = $chegada;
        $this->distancia = $distancia;
    }

    /**
     * @return mixed|null
     */
    public function getCidadePartida()
    {
        return $this->cidadePartida;
    }

    /**
     * @param mixed|null $cidadePartida
     */
    public function setCidadePartida($cidadePartida)
    {
        $this->cidadePartida = $cidadePartida;
    }

    /**
     * @return mixed|null
     */
    public function getCidadeChegada()
    {
        return $this->cidadeChegada;
    }

    /**
     * @param mixed|null $cidadeChegada
     */
    public function setCidadeChegada($cidadeChegada)
    {
        $this->cidadeChegada = $cidadeChegada;
    }

    /**
     * @return mixed|null
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * @param mixed|null $distancia
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;
    }


}