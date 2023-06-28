<?php

require_once('../Model/Postgres.php');

$postgres = new Postgres('angelo', 'angelo', 'integrador');
$postgres->criaConexao();
$conn = $postgres->getConexao();
if(!$conn){
    header('Location: ../View/login.php?erro=1');
}

$email = $postgres->getConexao()->quote($_POST['email']);
$senha = $postgres->getConexao()->quote($_POST['senha']);

$query = "select * from usuarios where email = ". $email ." and senha = " . $senha ;

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







