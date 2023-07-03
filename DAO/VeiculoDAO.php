<?php


include_once '../Model/Postgres.php';
include_once '../Model/Veiculo.php';

class VeiculoDAO extends Veiculo
{

    public function __construct()
    {
        parent::__construct();
    }
}