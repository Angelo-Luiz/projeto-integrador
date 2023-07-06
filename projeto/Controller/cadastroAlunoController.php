<?php
include_once '../DAO/AlunoDAO.php';

$aluno = new AlunoDAO();

if(array_key_exists('segunda', $_POST))  $aluno->setFrequencia(1);
if(array_key_exists('terca', $_POST)) $aluno->setFrequencia(2);
if(array_key_exists('quarta', $_POST)) $aluno->setFrequencia(3);
if(array_key_exists('quinta', $_POST)) $aluno->setFrequencia(4);
if(array_key_exists('sexta', $_POST)) $aluno->setFrequencia(5);

$aluno->setNome(addslashes($_POST['nome']));
$aluno->setEmail(addslashes($_POST['email']));
$aluno->setCpf(addslashes($_POST['cpf']));
$aluno->setTelefone(addslashes($_POST['telefone']));
$aluno->setDataNasc(addslashes($_POST['data']));
$aluno->setUniversidade($_POST['universidade']);

$aluno->createAluno();