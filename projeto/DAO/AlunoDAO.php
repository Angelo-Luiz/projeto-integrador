<?php

include_once '../Model/Postgres.php';     
include_once '../Model/Aluno.php';

class AlunoDAO extends Aluno{

    public function __construct(){
        parent::__construct();
    }

    public function createAluno(){

        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();

            $query = "insert into aluno (nome_completo, cpf, email, telefone, data_nascimento, universidade)";
            $query .= " values( '". $this->getNome() . "', ". $this->getCpf() . ", '". $this->getEmail(). "', ";
            $query .= $this->getTelefone(). ", '" . $this->getDataNasc() . "', " . $this->getUniversidade() . ")";


            $insert = $postgres->getConexao()->prepare($query);

            if($insert->execute()){
                $query = "Select * from aluno where email = '". $this->getEmail() . "'";
                $consulta = $postgres->getConexao()->query($query);
                $consulta = $consulta->fetchAll();

                if(count($consulta) >= 1){
                    foreach ($this->getFrequencia() as $dia){
                        $query = "insert into frequencia_aluno(id_aluno, id_universidade,id_dia, ano, semestre)";
                        $query .= "values(". $consulta[0]['id'] . ", ";
                        $query .= $this->getUniversidade() . ", ";
                        $query .= $dia. ", 2023, 2)";

                        $insert = $postgres->getConexao()->prepare($query);
                        if($insert->execute()){
                            continue;
                        }else{
                            throw new PDOException("Erro ao inserir frequencia");
                        }

                    }

                }
                $postgres->desconectar();
                header('Location: ../View/cadastroAluno.php?cadastro=success');

            }
            else{
                $postgres->desconectar();
                header('Location: ../View/cadastroAluno.php?cadastro=error');
            }

        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function readAluno(){

    }
    public function updateAluno(){

    }
    public function deleteAluno(){

    }

}
