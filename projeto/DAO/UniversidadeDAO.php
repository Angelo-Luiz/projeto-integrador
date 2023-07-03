<?php
include_once '../Model/Universidade.php';
include_once '../Model/Postgres.php';

class UniversidadeDAO extends Universidade{
    public function __construct(){
        parent::__construct();
    }

    public function createUniversidade(){
        try {
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $sql = "insert into universidades (nome, sigla, cidade) values ('" . $this->getNome() . "', '";
            $sql .= $this->getSigla() . "', " . $this->getCidade() . ")";
            $insert = $postgres->getConexao()->prepare($sql);

            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroUniversidade.php?cadastro=success');
            } else{
                $postgres->desconectar();
                header('location: ../View/cadastroUniversidade.php?cadastro=error');
            }

            echo $sql;

        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }


    public function readUniversidade($query = "select * from universidades"){
        $postgres = new Postgres('angelo', 'angelo', 'integrador');
        $postgres->criaConexao();
        $consulta = $postgres->getConexao()->query($query);
        $consulta = $consulta->fetchAll();
        $postgres->desconectar();
        return $consulta;

    }



}