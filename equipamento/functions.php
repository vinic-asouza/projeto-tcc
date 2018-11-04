<?php

require_once '../config.php';
require_once DBAPI;

$equipamentos = null;
$equipamento = null;

$selectEquipamentos = null;
$selectEquipamento = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $equipamentos;
    $equipamentos = find_all('equipamento');
}

function indexEquipamento()
{
    global $selectEquipamentos;
    $selectEquipamentos = findEquipamento('equipamento');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['equipamento'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $equipamento = $_POST['equipamento'];
        $equipamento['modified'] = $equipamento['created'] = $today->format('Y-m-d H:i:s');

        save('equipamento', $equipamento);
        header('location: index.php');
    }
}

/**
 *	Atualizacao/Edicao de Cliente.
 */
function edit()
{
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (isset($_POST['equipamento'])) {
            $equipamento = $_POST['equipamento'];
            $equipamento['modified'] = $now->format('Y-m-d H:i:s');

            update('equipamento', $id, $equipamento);
            header('location: index.php');
        } else {
            global $equipamento;
            $equipamento = findEquipamento('equipamento', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Visualização de um Cliente.
 */
function view($id = null)
{
    global $equipamento;
    $equipamento = findEquipamento('equipamento', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $equipamento;
    $equipamento = remove('equipamento', $id);

    header('location: index.php');
}
