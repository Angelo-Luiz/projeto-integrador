<?php


include_once '../Model/Postgres.php';
include_once '../Model/Veiculo.php';

class VeiculoDAO extends Veiculo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function createVeiculo(){

        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $sql = "insert into veiculo(placa, marca, modelo, km, dataaquisicao, qtdeeixos, categoria) values (";
            $sql .= "'" . $this->getPlaca() . "', ";
            $sql .= "'" . $this->getMarca() . "', ";
            $sql .= "'" . $this->getModelo() . "', ";
            $sql .= $this->getKm() . ", ";
            $sql .= "'" . $this->getDataAquisicao() . "', ";
            $sql .= $this->getEixos() . ", ";
            $sql .= $this->getCategoria() . ") ";

            $insert = $postgres->getConexao()->prepare($sql);
            echo $sql;
            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroVeiculo.php?cadastro=success');
            } else{
                $postgres->desconectar();
                header('location: ../View/cadastroVeiculo.php?cadastro=error');
            }

            echo $sql;

        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}