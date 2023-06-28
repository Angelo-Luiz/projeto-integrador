<?php
include_once '../DAO/AlunoDAO.php';

$aluno = new AlunoDAO();

if(array_key_exists('segunda', $_POST))  $aluno->setFrequencia($_POST['segunda']);
if(array_key_exists('terca', $_POST)) $aluno->setFrequencia($_POST['terca']);
if(array_key_exists('quarta', $_POST)) $aluno->setFrequencia($_POST['quarta']);
if(array_key_exists('quinta', $_POST)) $aluno->setFrequencia($_POST['quinta']);
if(array_key_exists('sexta', $_POST)) $aluno->setFrequencia($_POST['sexta']);

$aluno->setNome(addslashes($_POST['nome']));
$aluno->setEmail(addslashes($_POST['email']));
$aluno->setCpf(addslashes($_POST['cpf']));
$aluno->setTelefone(addslashes($_POST['telefone']));
$aluno->setDataNasc(addslashes($_POST['data']));
$aluno->setUniversidade($_POST['universidade']);

$aluno->createAluno();