<?php

require_once '../config.php';
require_once DBAPI;

$funcionarios = null;
$funcionario = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $funcionarios;
    $funcionarios = find_all('funcionario');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['funcionario'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $funcionario = $_POST['funcionario'];
        $funcionario['modified'] = $funcionario['created'] = $today->format('Y-m-d H:i:s');

        save('funcionario', $funcionario);
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

        if (isset($_POST['funcionario'])) {
            $funcionario = $_POST['funcionario'];
            $funcionario['modified'] = $now->format('Y-m-d H:i:s');

            update('funcionario', $id, $funcionario);
            header('location: index.php');
        } else {
            global $funcionario;
            $funcionario = find('funcionario', $id);
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
    global $funcionario;
    $funcionario = find('funcionario', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $funcionario;
    $funcionario = remove('funcionario', $id);

    header('location: index.php');
}
