<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Cidades</title>
    <?php
    session_start();
    if(!$_SESSION['id_usuario'] || $_SESSION['id_usuario'] == ''){
        header('Location: login.php?erro=3');
    }
    $statusCadastro = $_GET['cadastro'];
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
    echo "<script>alert('Cidade cadastrada com sucesso')</script>";
}else if($statusCadastro == 'error'){
    echo "<script>alert('Erro ao inserir registro.')</script>";
}
?>

<section class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cadastro de Cidades
        </div>
        <div class="card-body">
            <form method="post" action="../Controller/cadastroCidadeController.php" id="form">
                <div class="form-group">
                    <label for="nome">Nome da Cidade:</label>
                    <input type="text" class="form-control nome" id="nome" name="nome" placeholder="Nome da Cidade">
                </div>
                <div class="form-group">
                    <label for="email">CEP:</label>
                    <input type="number" class="form-control cep" id="cep" name="cep" placeholder="Digite o CEP">
                </div>
                <div class="form-group">
                    <label for="universidade">UF:</label>
                    <select class="form-control uf" id="uf" name="uf">
                        <option value="">Selecione o Estado...</option>
                        <option value="AC">Acre (AC)</option>
                        <option value="AL">Alagoas (AL)</option>
                        <option value="AP">Amapá (AP)</option>
                        <option value="AM">Amazonas (AM)</option>
                        <option value="BA">Bahia (BA)</option>
                        <option value="CE">Ceará (CE)</option>
                        <option value="DF">Distrito Federal (DF)</option>
                        <option value="ES">Espírito Santo (ES)</option>
                        <option value="GO">Goiás (GO)</option>
                        <option value="MA">Maranhão (MA)</option>
                        <option value="MT">Mato Grosso (MT)</option>
                        <option value="MS">Mato Grosso do Sul (MS)</option>
                        <option value="MG">Minas Gerais (MG)</option>
                        <option value="PA">Pará (PA)</option>
                        <option value="PB">Paraíba (PB)</option>
                        <option value="PR">Paraná (PR)</option>
                        <option value="PE">Pernambuco (PE)</option>
                        <option value="PI">Piauí (PI)</option>
                        <option value="RJ">Rio de Janeiro (RJ)</option>
                        <option value="RN">Rio Grande do Norte (RN)</option>
                        <option value="RS">Rio Grande do Sul (RS)</option>
                        <option value="RO">Rondônia (RO)</option>
                        <option value="RR">Roraima (RR)</option>
                        <option value="SC">Santa Catarina (SC)</option>
                        <option value="SP">São Paulo (SP)</option>
                        <option value="SE">Sergipe (SE)</option>
                        <option value="TO">Tocantins (TO)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary botao">Enviar</button>
            </form>
        </div>
    </div>
</section>

<script src="../JS/CadastroCidade.js"></script>
</body>
</html>


