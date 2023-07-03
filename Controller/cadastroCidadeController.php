<?php
include_once '../DAO/CidadeDAO.php';

$cidade = new CidadeDAO();

$cidade->setNome(addslashes($_POST['nome']));
$cidade->setUf(addslashes($_POST['uf']));
$cidade->setCep(addslashes($_POST['cep']));

$cidade->createCidade();

