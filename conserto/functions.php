<?php

require_once '../config.php';
require_once DBAPI;

$consertos = null;
$conserto = null;

$selectConsertos = null;
$selectConserto = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $consertos;
    $consertos = find_all('conserto');
}

function indexConserto()
{
    global $selectConsertos;
    $selectConsertos = findConserto('conserto');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['conserto'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $conserto = $_POST['conserto'];
        $conserto['modified'] = $conserto['created'] = $today->format('Y-m-d H:i:s');

        save('conserto', $conserto);
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

        if (isset($_POST['conserto'])) {
            $conserto = $_POST['conserto'];
            $conserto['modified'] = $now->format('Y-m-d H:i:s');

            update('conserto', $id, $conserto);
            header('location: index.php');
        } else {
            global $conserto;
            $conserto = find('conserto', $id);
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
    global $conserto;
    $conserto = findConserto('conserto', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $conserto;
    $conserto = remove('conserto', $id);

    header('location: index.php');
}
