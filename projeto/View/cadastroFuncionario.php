<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Funcionários</title>
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
    </style>

</head>
<body>

<?php
include_once 'topo.php';

if($statusCadastro == 'success'){
    echo "<script>alert('Funcionario cadastrado com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cadastro de Funcionário
        </div>
        <div class="card-body">
            <form method="post" action="../Controller/cadastroFuncionarioController.php" id="form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control nome" id="nome" name="nome" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" class="form-control cpf" id="cpf" name="cpf" placeholder="Digite o CPF">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control email" id="email" name="email" placeholder="Digite o Email">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control endereco" id="endereco" name="endereco" placeholder="Digite o Endereço">
                </div>
                <div class="form-group">
                    <label for="data">Data de Admissão:</label>
                    <input type="date" class="form-control data" id="data" name="data">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control telefone" id="telefone" name="telefone" placeholder="Informe o telefone">
                </div>
                <div class="form-group">
                    <label for="usuario">Selecione o Cargo:</label>
                    <select class="form-control cargo" id="cargo" name="cargo">
                        <option value="">Selecione</option>
                        <option value="1">Motorista</option>
                        <option value="2">Mecânico</option>
                        <option value="3">Auxiliar Administrativo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="salario">Salário:</label>
                    <input type="number" class="form-control salario" id="salario" name="salario" placeholder="Informe a Salario">
                </div>

                <button type="submit" class="btn btn-primary botao">Enviar</button>
            </form>
        </div>
    </div>
</section>

<script src="../JS/CadastroFuncionario.js"></script>

<?php include_once 'rodape.php'; ?>
</body>
</html>


