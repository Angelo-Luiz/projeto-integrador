<?php
include_once '../DAO/AlunoDAO.php';

$input = json_decode(file_get_contents('php://input'), true);
header('Content-Type: application/json');

$QUERY = "";
$aluno = new AlunoDAO();
//echo json_encode($input);

//data inicial e final
if(!empty($input['dataInicial']) && !empty($input['dataFinal']) && empty($input['dia']) && empty($input['semestre']) && empty($input['universidade'])){

    $QUERY = "select * from aluno where (data_nascimento >= '". $input['dataInicial'] ."' and data_nascimento <= '". $input['dataFinal'] ."')";

    $consulta = $aluno->readAluno($QUERY);
    echo json_encode($consulta);
}
//semestre e dia
else if(!empty($input['dia']) && !empty($input['semestre']) && empty($input['universidade'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " left join frequencia_aluno freq on a.id = freq.id_aluno";
    $QUERY .= " left join dias_semana d on freq.id_dia = d.id";
    $QUERY .= " where freq.semestre = " . $input['semestre'] . " and d.id = " . $input['dia'];

    $consulta = $aluno->readAluno($QUERY);
    echo json_encode($consulta);
}
//universidade dia e semestre
else if(!empty($input['universidade']) && !empty($input['dia']) && !empty($input['semestre'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " left join frequencia_aluno freq on a.id = freq.id_aluno";
    $QUERY .= " left join dias_semana d on freq.id_dia = d.id";
    $QUERY .= " where (freq.semestre = " . $input['semestre'] . " and d.id = " . $input['dia'] . " and freq.id_universidade = " . $input['universidade'] . ")";

    $consulta = $aluno->readAluno($QUERY);

    echo json_encode($consulta);
}
//universidade
else if(empty($input['dataInicial']) && empty($input['dataFinal']) && empty($input['dia']) && empty($input['semestre']) && !empty($input['universidade'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " where universidade = " . $input['universidade'];

    $consulta = $aluno->readAluno($QUERY);

    echo json_encode($consulta);

}
//universidade e semstre
else if(empty($input['dataInicial']) && empty($input['dataFinal']) && empty($input['dia']) && !empty($input['semestre']) && !empty($input['universidade'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " left join frequencia_aluno freq on a.id = freq.id_aluno";
    $QUERY .= " where universidade = " . $input['universidade'] . " and freq.semestre = " . $input['semestre'];

    $consulta = $aluno->readAluno($QUERY);

    echo json_encode($consulta);

}
//todos os filtros
else if(!empty($input['dataInicial']) && !empty($input['dataFinal']) && !empty($input['dia']) && !empty($input['semestre']) && !empty($input['universidade'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " left join frequencia_aluno freq on a.id = freq.id_aluno";
    $QUERY .= " left join dias_semana d on freq.id_dia = d.id";
    $QUERY .= " where universidade = " . $input['universidade'] . " and freq.semestre = " . $input['semestre'];
    $QUERY .= " and data_nascimento >= '". $input['dataInicial'] ."' and data_nascimento <= '". $input['dataFinal'] ."'";
    $QUERY .= " and d.id = " . $input['dia'];

    $consulta = $aluno->readAluno($QUERY);

    echo json_encode($consulta);

}

//universidade e dia
else if(empty($input['dataInicial']) && empty($input['dataFinal']) && !empty($input['dia']) && empty($input['semestre']) && !empty($input['universidade'])){

    $QUERY = "select a.id, a.nome_completo, a.cpf, a.telefone, a.email, a.data_nascimento from aluno a";
    $QUERY .= " left join frequencia_aluno freq on a.id = freq.id_aluno";
    $QUERY .= " where universidade = " . $input['universidade'] . " and freq.id_dia = " . $input['dia'];

    $consulta = $aluno->readAluno($QUERY);

    echo json_encode($consulta);

}


