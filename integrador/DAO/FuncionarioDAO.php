<?php

include_once '../Model/Postgres.php';
include_once '../Model/Funcionario.php';
class FuncionarioDAO extends Funcionario{

    public function __construct(){
        parent::__construct();
    }
}