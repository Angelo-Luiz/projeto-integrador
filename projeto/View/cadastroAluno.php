<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Alunos</title>
    <?php
    include_once '../DAO/UniversidadeDAO.php';
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = $_GET['cadastro'];
    $uni = new UniversidadeDAO();
    $consulta = $uni->readUniversidade();

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
    echo "<script>alert('Aluno cadastrado com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cadastro de Alunos
        </div>
        <div class="card-body">
            <form method="post" action="../Controller/cadastroAlunoController.php" id="form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control nome" id="nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control email" id="email" name="email" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" class="form-control cpf" id="cpf" name="cpf" placeholder="Digite seu CPF">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control telefone" id="telefone" name="telefone" placeholder="Digite seu telefone">
                </div>
                <div class="form-group">
                    <label for="data">Data de Nascimento:</label>
                    <input type="date" class="form-control data" id="data" name="data" placeholder="Digite sua data de nascimento">
                </div>
                <div class="form-group">
                    <label for="universidade">Universidade:</label>
                    <select class="form-control universidade" id="universidade" name="universidade">
                        <option value="">Selecione sua Universidade</option>
                        <?php
                        foreach ($consulta as $row){
                            echo "<option value='".  $row['id']. "'>". $row['nome']. " - ". $row['sigla'] ."</option>";
                        }

                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="frequencia">Frequência:</label>
                    <div class="card-body" id="frequencia">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="segunda" id="opcao1" value="segunda">
                            <label class="form-check-label" for="opcao1">
                                Segunda Feira
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="terca" id="opcao2" value="terca">
                            <label class="form-check-label" for="opcao2">
                                Terça Feira
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quarta" id="opcao3" value="quarta">
                            <label class="form-check-label" for="opcao3">
                                Quarta Feira
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="quinta" id="opcao4" value="quinta">
                            <label class="form-check-label" for="opcao4">
                                Quinta Feira
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexta" id="opcao5" value="sexta">
                            <label class="form-check-label" for="opcao5">
                                Sexta Feira
                            </label>
                        </div>
                </div>

                <button type="submit" class="btn btn-primary botao">Enviar</button>
            </form>
        </div>
    </div>
</section>

<script src="../JS/CadastroAluno.js"></script>
</body>
</html>


