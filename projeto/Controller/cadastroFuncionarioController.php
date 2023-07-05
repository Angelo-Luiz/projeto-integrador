<?php

include_once '../DAO/FuncionarioDAO.php';

$funcionarios = new FuncionarioDAO();

$funcionarios->setNomeCompleto(addslashes($_POST['nome']));
$funcionarios->setCpf(addslashes($_POST['cpf']));
$funcionarios->setEmail(addslashes($_POST['email']));
$funcionarios->setEndereco(addslashes($_POST['endereco']));
$funcionarios->setDataAdmissao(addslashes($_POST['data']));
isset($_POST['telefone']) ? $funcionarios->setTelefone(addslashes($_POST['telefone'])) : $funcionarios->setTelefone(null);
$funcionarios->setCargo(addslashes($_POST['cargo']));
$funcionarios->setSalario(addslashes($_POST['salario']));

$funcionarios->createFuncionario();