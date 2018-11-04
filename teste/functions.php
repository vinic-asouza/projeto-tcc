<?php

require_once '../config.php';
require_once DBAPI;

$testes = null;
$teste = null;

$selectTeste = null;
$selectTeste = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $testes;
    $testes = find_all('teste');
}

function indexTeste()
{
    global $selectTeste;
    $selectTeste = findTeste('teste');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['teste'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $teste = $_POST['teste'];
        $teste['modified'] = $teste['created'] = $today->format('Y-m-d H:i:s');

        save('teste', $teste);
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

        if (isset($_POST['teste'])) {
            $teste = $_POST['teste'];
            $teste['modified'] = $now->format('Y-m-d H:i:s');

            update('teste', $id, $teste);
            header('location: index.php');
        } else {
            global $teste;
            $teste = findTeste('teste', $id);
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
    global $teste;
    $teste = findTeste('teste', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $teste;
    $teste = remove('teste', $id);

    header('location: index.php');
}
