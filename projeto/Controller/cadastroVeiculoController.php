<?php

include_once '../DAO/VeiculoDAO.php';

$veiculos = new VeiculoDAO();

$veiculos->setPlaca(addslashes($_POST['placa']));
$veiculos->setMarca(addslashes($_POST['marca']));
$veiculos->setModelo(addslashes($_POST['modelo']));
$veiculos->setKm(addslashes($_POST['km']));
$veiculos->setDataAquisicao(addslashes($_POST['data']));
$veiculos->setEixos(addslashes($_POST['eixos']));
$veiculos->setCategoria(addslashes($_POST['categoria']));

$veiculos->createVeiculo();