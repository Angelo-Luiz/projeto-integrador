<?php

require_once('../Model/Postgres.php');

$postgres = new Postgres('angelo', 'angelo', 'integrador');
$postgres->criaConexao();
$conn = $postgres->getConexao();
if(!$conn){
    header('Location: ../View/login.php?erro=1');
}

$login = $postgres->getConexao()->quote($_POST['login']);
$senha = $postgres->getConexao()->quote($_POST['senha']);

$query = "select * from usuarios where login = ". $login ." and senha = " . $senha ;

$consulta = $conn->query($query);
$consulta = $consulta->fetchAll();

if(!$consulta){
    header('Location: ../View/login.php?erro=2');
} else{
    session_start();
    $_SESSION['id_usuario'] = $consulta[0]['id'];
    $postgres->desconectar();
//    echo $_SESSION['id_usuario'];
    header('Location: ../View/home.php?login=success');
}







