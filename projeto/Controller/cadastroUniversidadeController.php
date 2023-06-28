<?php
include_once '../DAO/UniversidadeDAO.php';

$uni = new UniversidadeDAO();
$uni->setNome(addslashes($_POST['nome']));
$uni->setSigla(addslashes($_POST['sigla']));
$uni->setCidade(addslashes($_POST['cidade']));

$uni->createUniversidade();