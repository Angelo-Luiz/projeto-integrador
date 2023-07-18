<?php
include_once '../Model/Usuario.php';
include_once '../Model/Postgres.php';
class UsuarioDAO extends Usuario{
    public function __construct(){
        parent::__construct();
    }

    public function createUsuario(){
        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $sql = "insert into usuario(senha, email, tipo_usuario, dataNasc, nomecompleto, cpf, login) values ('";
            $sql .= $this->getSenha() . "', '";
            $sql .= $this->getEmail() . "', '";
            $sql .= $this->getTipo() . "', '";
            $sql .= $this->getDataNasc() . "', '";
            $sql .= $this->getNome() . "', '";
            $sql .= $this->getCpf() . "', '";
            $sql .= $this->getLogin() . "')";

            $insert = $postgres->getConexao()->prepare($sql);
            if($insert->execute()){
                $postgres->desconectar();
                header('location: ../View/cadastroUsuario.php?cadastro=success');
            } else{
                $postgres->desconectar();
                header('location: ../View/cadastroUsuario.php?cadastro=error');
            }


        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}