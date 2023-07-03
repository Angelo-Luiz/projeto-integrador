<?php
class Veiculo{
    private $placa;
    private $marca;
    private $modelo;
    private $dataAquisicao;
    private $km;
    private $categoria;
    private $tipo;
    private $eixos;

    public function __construct($placa = null, $marca = null, $modelo = null, $data = null, $km = null, $categoria = null, $tipo = null, $eixos = null){
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dataAquisicao = $data;
        $this->km = $km;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->eixos = $eixos;
    }

    /**
     * @return mixed|null
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed|null $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    /**
     * @return mixed|null
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed|null $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed|null
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed|null $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed|null
     */
    public function getDataAquisicao()
    {
        return $this->dataAquisicao;
    }

    /**
     * @param mixed|null $dataAquisicao
     */
    public function setDataAquisicao($dataAquisicao)
    {
        $this->dataAquisicao = $dataAquisicao;
    }

    /**
     * @return mixed|null
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @param mixed|null $km
     */
    public function setKm($km)
    {
        $this->km = $km;
    }

    /**
     * @return mixed|null
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed|null $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed|null $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed|null
     */
    public function getEixos()
    {
        return $this->eixos;
    }

    /**
     * @param mixed|null $eixos
     */
    public function setEixos($eixos)
    {
        $this->eixos = $eixos;
    }



}