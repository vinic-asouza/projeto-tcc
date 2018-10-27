<?php

function contagemDevolucaoTotalMes($mes)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM devolucao WHERE month(data) = '.$mes;
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemTesteTotalMes($mes)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM teste WHERE month(created) = '.$mes;
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemMensalPorDescricao($table = null, $descricao = null, $coluna_data = null, $mes = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table.' 
        INNER JOIN equipamento on equipamento_id = equipamento.id 
        INNER JOIN modelo on modelo_id = modelo.id 
        WHERE nome_equip = "'.$descricao.'" 
        AND month('.$table.'.'.$coluna_data.') = '.$mes;

        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemMensalPorModelo($table = null, $tablejoin = null, $coluna = null, $colunajoin = null, $item = null, $chavejoin = null, $coluna_data = null, $mes = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table.' 
        INNER JOIN '.$tablejoin.' ON '.$coluna.' = '.$tablejoin.'.'.$chavejoin.' 
        WHERE '.$colunajoin.' = '.$item.' 
        AND month('.$table.'.'.$coluna_data.') = '.$mes;
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}
