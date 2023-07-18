<?php
include_once '../DAO/AlunoDAO.php';
include_once '../DAO/UniversidadeDAO.php';
include_once '../DAO/CidadeDAO.php';
include_once '../DAO/FuncionarioDAO.php';
include_once '../DAO/RotasDAO.php';
include_once '../DAO/UsuarioDAO.php';
include_once '../DAO/VeiculoDAO.php';

$input = json_decode(file_get_contents('php://input', true));
header('Content-Type: application/json');

$texto = '';
$consulta = [];
if($input->operacao == 2){
    switch ($input->formulario){
        case 1:
            $aluno = new AlunoDAO();
            $consulta = $aluno->readAluno();
            $texto = 'aluno';
    }
}if($input->operacao == 1){
    $texto = 'Editar';
}
?>


<div class="form-row">


<div class="form-group col-md-12">
<select class="form-control" id="select-deletar">
    <option> selecione um <?php echo $texto ?></option>
        <?php
            foreach ($consulta as $row){
                echo "<option value='". $row['id']."'>". $row['id'] ." - ".$row['nome_completo'] ."</option>";
            }
        ?>
</select>
</div>





</div>