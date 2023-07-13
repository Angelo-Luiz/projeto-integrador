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
    $dias = $uni->readUniversidade("select * from dias_semana");
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
        .botao{
            width: 100%;
        }

        .table-title {
            text-align: center;
        }

        .table-hidden {
            display: none;
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
            <h4>Relatório</h4>
    </div>
        <div class="card-body">
    <form id="form">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="data-inicial">Data Inicial</label>
                <input type="date" class="form-control" id="data-inicial" placeholder="Data Inicial">
            </div>
            <div class="form-group col-md-6">
                <label for="data-final">Data Final</label>
                <input type="date" class="form-control" id="data-final" placeholder="Data Final">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="semestre">Semestre</label>
                <select class="form-control" id="semestre">
                    <option value="">Selecione um semestre</option>
                    <option value="1">1º semestre</option>
                    <option value="2">2º semestre</option>
                </select>

            </div>
            <div class="form-group col-md-6">
                <label for="dia">Dia</label>
                <select class="form-control" id="dia">
                    <option value="">Selecione algum dia</option>
                    <?php
                    foreach ($dias as $row){
                        echo "<option value='". $row['id'] . "'>". $row['descricao'] . "</option>";
                    }
                    ?>
                </select>

            </div>
        </div>


        <div class="form-group">
            <label for="universidade">Universidade</label>
            <select class="form-control" id="universidade">
                <option value="">Selecione uma universidade</option>
                <?php
                foreach ($facul as $row){
                    echo "<option value='". $row['id'] . "'>". $row['nome'] . " - ". $row['sigla'] ."</option>";
                }

                ?>
            </select>
        </div>
        <button type="button" class="btn btn-success botao" id="botao">Consultar</button>
    </form>
        </div>
    </div>
</section>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title table-title">Relatório de Alunos</h5>
        </div>
        <div class="card-body">
            <table class="table ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>

                </tr>
                </thead>
                <tbody id="tbody-aluno">

                </tbody>
            </table>
        </div>
    </div>
</div>




<script src="../JS/RelatorioAluno.js"></script>
</body>
</html>
