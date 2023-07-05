<?php

include_once '../DAO/RotasDAO.php';

$rotas = new RotasDAO();

$rotas->setCidadeChegada(addslashes($_POST['cidade2']));
$rotas->setCidadePartida(addslashes($_POST['cidade']));
$rotas->setDistancia(addslashes($_POST['distancia']));
$rotas->setDescricao(addslashes($_POST['descricao']));

$rotas->createRota();

