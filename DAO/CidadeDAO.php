<?php
include_once '../Model/Cidade.php';
include_once '../Model/Postgres.php';

class CidadeDAO extends Cidade{

    public function __construct(){
        parent::__construct();
    }

    public function createCidade(){
        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $query = "insert into cidades (nome, uf, cep) values ('". $this->getNome() ."', '". $this->getUf() ."', ";
            $query .= "'". $this->getCep() . "')";

            $insert = $postgres->getConexao()->prepare($query);
            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroCidade.php?cadastro=success');
            }else{
                $postgres->desconectar();
                header('location: ../View/cadastroCidade.php?cadastro=error');
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function readCidade($sql = "select * from cidades"){
        $postgres = new Postgres('angelo', 'angelo', 'integrador');
        $postgres->criaConexao();
        $consulta = $postgres->getConexao()->query($sql);
        $consulta = $consulta->fetchAll();
        $postgres->desconectar();
        return $consulta;
    }

}