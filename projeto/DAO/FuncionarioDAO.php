<?php

include_once '../Model/Postgres.php';
include_once '../Model/Funcionario.php';
class FuncionarioDAO extends Funcionario{

    public function __construct(){
        parent::__construct();
    }

    public function createFuncionario(){

        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $sql = "";

            if($this->getTelefone() != null){
                $sql = "insert into funcionario (nome, email, endereco, data_admissao, telefone, cargo, salario) ";
                $sql .= "values ('" . $this->getNomeCompleto() . "', ";
                $sql .= "'" . $this->getEmail() . "', ";
                $sql .= "'" . $this->getEndereco() . "', ";
                $sql .= "'" . $this->getDataAdmissao() . "', ";
                $sql .= "'" . $this->getTelefone() . "', ";
                $sql .= "'" . $this->getCargo() . "', ";
                $sql .= "'" . $this->getSalario() . "')";
            }
            else{
                $sql = "insert into funcionario (nome, email, endereco, data_admissao, cargo, salario) ";
                $sql .= "values ('" . $this->getNomeCompleto() . "', ";
                $sql .= "'" . $this->getEmail() . "', ";
                $sql .= "'" . $this->getEndereco() . "', ";
                $sql .= "'" . $this->getDataAdmissao() . "', ";
                $sql .= "'" . $this->getCargo() . "', ";
                $sql .= "'" . $this->getSalario() . "')";

            }

            $insert = $postgres->getConexao()->prepare($sql);

            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroFuncionario.php?cadastro=success');
            }
            else{
                $postgres->desconectar();
                header('location: ../View/cadastroFuncionario.php?cadastro=error');
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}