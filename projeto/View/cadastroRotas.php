<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Rotas</title>
    <?php
    include_once '../DAO/CidadeDAO.php';
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = $_GET['cadastro'];
    $cidades = new CidadeDAO();
    $consulta = $cidades->readCidade();
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
    echo "<script>alert('Rota cadastrada com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cadastro de Rotas
        </div>
        <div class="card-body">
            <form method="post" action="../Controller/cadastroUniversidadeController.php" id="form">
                <div class="form-group">
                    <label for="descricao">Descrição da Rota:</label>
                    <input type="text" class="form-control descricao" id="descricao" name="descricao" placeholder="Descrição da Rota">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade de Partida:</label>
                    <select class="form-control cidade" id="cidade" name="cidade">
                        <option value="">Selecione a cidade de partida</option>
                        <?php
                        foreach ($consulta as $row){
                            echo "<option value='".  $row['id']. "'>". $row['nome']. " - ". $row['uf'] ."</option>";
                        }

                        ?>

                    </select>

                </div>

                <div class="form-group">
                    <label for="cidade">Cidade de Chegada:</label>
                    <select class="form-control cidade2" id="cidade2" name="cidade2">
                        <option value="">Selecione a cidade de chegada</option>
                        <?php
                        foreach ($consulta as $row){
                            echo "<option value='".  $row['id']. "'>". $row['nome']. " - ". $row['uf'] ."</option>";
                        }

                        ?>

                    </select>

                </div>

                <div class="form-group">
                    <label for="distancia">Distância:</label>
                    <input type="number" class="form-control distancia" id="distancia" name="distancia" placeholder="Distância">
                </div>

                <button type="submit" class="btn btn-primary botao">Enviar</button>
            </form>
        </div>
    </div>
</section>

<script src="../JS/CadastroRotas.js"></script>
</body>
</html>


