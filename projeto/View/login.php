<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <?php
    $erro = $_GET['erro'];
    ?>
</head>
<body>
<div class="vertical-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Login</h2>
            <form action="../Controller/loginController.php" method="post">
                <div class="form-group">
                    <label for="email">Usuario:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu usuario" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <?php
                    if($erro == 1){
                        echo "<span style='color: red;'>Falha na conexão com o banco.</span>";
                    }else if($erro == 2){
                        echo "<span style='color: red;'>Login ou senha inválidos.</span>";
                    }else if($erro == 3){
                        echo "<span style='color: red;'>Sessão encerrada, efetue o login novamente.</span>";
                    }
                ?>
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>
        </div>
    </div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
