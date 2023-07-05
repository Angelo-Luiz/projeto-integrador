<!DOCTYPE html>
<html>
<head>
    <title>Relatório</title>
    <?php
    include_once '../DAO/UniversidadeDAO.php';
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = '';
    isset($_GET['cadastro']) ? $statusCadastro = $_GET['cadastro'] : $statusCadastro = null;


    $uni = new UniversidadeDAO();
    $facul = $uni->readUniversidade();
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
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Relatório de Alunos</h4>
    </div>
        <div class="card-body">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDataInicial">Data Inicial</label>
                <input type="date" class="form-control" id="inputDataInicial" placeholder="Data Inicial">
            </div>
            <div class="form-group col-md-6">
                <label for="inputDataFinal">Data Final</label>
                <input type="date" class="form-control" id="inputDataFinal" placeholder="Data Final">
            </div>
        </div>
        <div class="form-group">
            <label for="inputCategoria">Universidade</label>
            <select class="form-control" id="inputCategoria">
                <option value="">Selecione uma categoria</option>
                <?php
                foreach ($facul as $row){
                    echo "<option value'". $row['id'] . "'>". $row['nome'] . " - ". $row['sigla'] ."</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputStatus">Status</label>
            <select class="form-control" id="inputStatus">
                <option value="">Selecione um status</option>
                <option value="status1">Status 1</option>
                <option value="status2">Status 2</option>
                <option value="status3">Status 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
    </form>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
