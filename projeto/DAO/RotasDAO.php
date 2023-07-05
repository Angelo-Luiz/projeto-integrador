<?php


include_once '../Model/Postgres.php';
include_once '../Model/Rotas.php';

class RotasDAO extends Rotas
{

    public function __construct()
    {
        parent::__construct();
    }


    public function createRota(){
        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();

            $sql = "insert into rota(cid_partida, cid_chegada, descricao, distancia) values (";
            $sql .= $this->getCidadePartida() . ", ";
            $sql .= $this->getCidadeChegada() . ", '";
            $sql .= $this->getDescricao() . "', '";
            $sql .= $this->getDistancia() . "')";

            $insert = $postgres->getConexao()->prepare($sql);

            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroRotas.php?cadastro=success');
            }
            else{
                $postgres->desconectar();
                header('location: ../View/cadastroRotas.php?cadastro=error');
            }


        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}