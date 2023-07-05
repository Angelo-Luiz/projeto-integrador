<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Veículos</title>
    <?php
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = '';
    isset($_GET['cadastro']) ? $statusCadastro = $_GET['cadastro'] : $statusCadastro = null;    ?>

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
    echo "<script>alert('Veiculo cadastrada com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cadastro de Veículo
        </div>
        <div class="card-body">
            <form method="post" action="../Controller/cadastroVeiculoController.php" id="form">
                <div class="form-group">
                    <label for="nome">Placa:</label>
                    <input type="text" class="form-control placa" id="placa" name="placa" placeholder="Digite a Placa">
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control marca" id="marca" name="marca" placeholder="Informe a Marca">
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control modelo" id="modelo" name="modelo" placeholder="Informe o Modelo">
                </div>
                <div class="form-group">
                    <label for="kilometragem">Kilometragem:</label>
                    <input type="number" class="form-control km" id="km" name="km" placeholder="Informe a KM atual do veículo">
                </div>
                <div class="form-group">
                    <label for="data">Data de Aquisição:</label>
                    <input type="date" class="form-control data" id="data" name="data">
                </div>
                <div class="form-group">
                    <label for="eixos">Quantidade de Eixos:</label>
                    <input type="number" class="form-control eixos" id="eixos" name="eixos" placeholder="Informe o a quantidade de eixos">
                </div>
                <div class="form-group">
                    <label for="categoria">Selecione a Categoria:</label>
                    <select class="form-control categoria" id="categoria" name="categoria">
                        <option value="">Selecione</option>
                        <option value="1">Caminhão</option>
                        <option value="2">Ônibus</option>
                        <option value="3">Van</option>
                        <option value="4">Carro</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary botao">Enviar</button>
            </form>
        </div>
    </div>
</section>

<script src="../JS/CadastroVeiculo.js"></script>

<?php include_once 'rodape.php'; ?>
</body>
</html>


