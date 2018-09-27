<?php

require_once '../config.php';
require_once DBAPI;

$devolucoes = null;
$devolucao = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $devolucoes;
    $devolucoes = find_all('devolucao');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['devolucao'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $devolucao = $_POST['devolucao'];
        $devolucao['modified'] = $devolucao['created'] = $today->format('Y-m-d H:i:s');

        save('devolucao', $devolucao);
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

        if (isset($_POST['devolucao'])) {
            $devolucao = $_POST['devolucao'];
            $devolucao['modified'] = $now->format('Y-m-d H:i:s');

            update('devolucao', $id, $devolucao);
            header('location: index.php');
        } else {
            global $devolucao;
            $devolucao = find('devolucao', $id);
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
    global $devolucao;
    $devolucao = find('devolucao', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $devolucao;
    $devolucao = remove('devolucao', $id);

    header('location: index.php');
}
