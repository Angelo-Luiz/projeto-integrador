<?php
include_once '../DAO/UsuarioDAO.php';

$usuario = new UsuarioDAO();

$usuario->setNome(addslashes($_POST['nome']));
$usuario->setCpf(addslashes($_POST['cpf']));
$usuario->setEmail(addslashes($_POST['email']));
$usuario->setLogin(addslashes($_POST['usuario']));
$usuario->setSenha(addslashes($_POST['senha']));
$usuario->setTipo(addslashes($_POST['tipo']));
$usuario->setDataNasc(addslashes($_POST['data']));

$usuario->createUsuario();