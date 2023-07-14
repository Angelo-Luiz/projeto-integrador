<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar Cadastros</title>
    <?php
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = '';
    isset($_GET['cadastro']) ? $statusCadastro = $_GET['cadastro'] : $statusCadastro = null;


    ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        body{
            background-color: #D3D3D3;
        }

        .campo-escondido{
            display: none;
        }
    </style>

</head>
<body>

<?php
include_once 'topo.php';

if($statusCadastro == 'success'){
    echo "<script>alert('Cidade cadastrada com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Alterar Cadastro
        </div>
        <div class="card-body">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="operacao">Operação</label>
                <select class="form-control uf" id="operacao" name="operacao">
                    <option value="">Selecione a Operação</option>
                    <option value="1">Editar Cadastro</option>
                    <option value="2">Deletar Cadastro</option>
                </select>
            </div>

                <div class="form-group col-md-6">
                    <label for="formulario">Formulário</label>
                    <select class="form-control formulario" id="formulario" name="formulario">
                        <option value="">Selecione o Formulário</option>
                        <option value="1">Aluno</option>
                        <option value="2">Cidade</option>
                        <option value="3">Funcionario</option>
                        <option value="4">Rotas</option>
                        <option value="5">Universidade</option>
                        <option value="6">Usuário</option>
                        <option value="7">Veículo</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</section>


<script src="../JS/EditarCadastro.js"></script>
</body>
</html>


