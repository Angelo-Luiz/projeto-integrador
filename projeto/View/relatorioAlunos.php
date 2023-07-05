<!DOCTYPE html>
<html>
<head>
    <title>Filtros de Relatório</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <label for="inputCategoria">Categoria</label>
            <select class="form-control" id="inputCategoria">
                <option value="">Selecione uma categoria</option>
                <option value="categoria1">Categoria 1</option>
                <option value="categoria2">Categoria 2</option>
                <option value="categoria3">Categoria 3</option>
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
