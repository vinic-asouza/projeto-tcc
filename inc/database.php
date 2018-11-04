<?php

mysqli_report(MYSQLI_REPORT_STRICT);

/**
 * OPEN / CLOSE DB -----------------------------------------------------------------------------------------------.
 */
function open_database()
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();

        return null;
    }
}

function close_database($conn)
{
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
/**
 *  GERAL - TABELA / VIEW -----------------------------------------------------------------------------------------------.
 */
function find($table = null, $id = null)
{
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = 'SELECT * FROM '.$table.' WHERE id = '.$id;

            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = 'SELECT * FROM '.$table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $found;
}
/**
 *  DEVOLUCAO - TABELA / VIEW -----------------------------------------------------------------------------------------------.
 */
function findDevolucao($table = null, $id = null)
{
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = 'SELECT *, d.id
            FROM '.$table.' as d
            INNER JOIN equipamento as e on equipamento_id = e.id 
            INNER JOIN modelo as m on modelo_id = m.id
            INNER JOIN funcionario as f on funcionario_id = f.id
            WHERE d.id = '.$id;

            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = 'SELECT *, d.id
            FROM '.$table.' as d
            INNER JOIN equipamento as e on equipamento_id = e.id 
            INNER JOIN modelo as m on modelo_id = m.id
            INNER JOIN funcionario as f on funcionario_id = f.id';
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $found;
}

/**
 *  TESTE - TABELA / VIEW -----------------------------------------------------------------------------------------------.
 */
function findTeste($table = null, $id = null)
{
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = 'SELECT *, t.id
            FROM '.$table.' as t
            INNER JOIN equipamento as e on equipamento_id = e.id 
            INNER JOIN modelo as m on modelo_id = m.id
            INNER JOIN funcionario as f on funcionario_id = f.id
            WHERE t.id = '.$id;

            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = 'SELECT *, t.id
            FROM '.$table.' as t
            INNER JOIN equipamento as e on equipamento_id = e.id 
            INNER JOIN modelo as m on modelo_id = m.id
            INNER JOIN funcionario as f on funcionario_id = f.id';
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $found;
}

/**
 *  DEVOLUCAO - TABELA / VIEW -----------------------------------------------------------------------------------------------.
 */
function findEquipamento($table = null, $id = null)
{
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = 'SELECT *, e.id
            FROM '.$table.' as e
            INNER JOIN modelo as m on modelo_id = m.id
            WHERE e.id = '.$id;

            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = 'SELECT *, e.id
            FROM '.$table.' as e
            INNER JOIN modelo as m on modelo_id = m.id';
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela.
 */
function find_all($table)
{
    return find($table);
}

/**
 *  Insere um registro no BD.
 */
function save($table = null, $data = null)
{
    $database = open_database();

    $columns = null;
    $values = null;

    foreach ($data as $key => $value) {
        $columns .= trim($key, "'").',';
        $values .= "'$value',";
    }

    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = 'INSERT INTO '.$table."($columns)".' VALUES '."($values);";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

/**
 *  Atualiza um registro em uma tabela, por ID.
 */
function update($table = null, $id = 0, $data = null)
{
    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'")."='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql = 'UPDATE '.$table;
    $sql .= " SET $items";
    //if ($table == 'equipamento') {
    //$sql .= ' WHERE mac_address ='.$id.';';
    //} else {
    $sql .= ' WHERE id ='.$id.';';
    //}
    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro.
 */
function remove($table = null, $id = null)
{
    $database = open_database();

    try {
        if ($id) {
            $sql = 'DELETE FROM '.$table.' WHERE id = '.$id;
            $result = $database->query($sql);

            if ($result = $database->query($sql)) {
                $_SESSION['message'] = 'Registro Removido com Sucesso.';
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

/**
 *  FUNÇÕES DASHBOARD -----------------------------------------------------------------------------------------------.
 */
function selectDistinct($coluna = null, $table = null)
{
    $database = open_database();
    $found = null;
    try {
        $sql = 'SELECT DISTINCT '.$coluna.' FROM '.$table;

        $result = $database->query($sql);

        if ($result->num_rows > 0) {
            $found = $result->fetch_all(MYSQLI_ASSOC);
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $found;
}

function contagem($table = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table;
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemItensPorData($table = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table.' WHERE data = "'.$data.'"';
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemItensPorModelo($table = null, $tablejoin = null, $coluna = null, $colunajoin = null, $item = null, $chavejoin = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table.' 
        INNER JOIN '.$tablejoin.' ON '.$coluna.' = '.$tablejoin.'.'.$chavejoin.' 
        WHERE '.$colunajoin.' = '.$item;
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}

function contagemItensPorDescricao($table = null, $descricao = null)
{
    $database = open_database();
    $total = null;

    try {
        $sql = 'SELECT * FROM '.$table.' INNER JOIN equipamento on equipamento_id = equipamento.id INNER JOIN modelo on modelo_id = modelo.id WHERE nome_equip = "'.$descricao.'"';
        $result = $database->query($sql);
        $total = mysqli_num_rows($result);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);

    return $total;
}
