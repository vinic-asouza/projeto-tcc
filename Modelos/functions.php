<?php

require_once dirname(__FILE__).'/../config.php';
require_once DBAPI;

$modelos = null;
$modelo = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $modelos;
    $modelos = find_all('modelo');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['modelo'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $modelo = $_POST['modelo'];
        $modelo['modified'] = $modelo['created'] = $today->format('Y-m-d H:i:s');

        save('modelo', $modelo);
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

        if (isset($_POST['modelo'])) {
            $modelo = $_POST['modelo'];
            $modelo['modified'] = $now->format('Y-m-d H:i:s');

            update('modelo', $id, $modelo);
            header('location: index.php');
        } else {
            global $modelo;
            $modelo = find('modelo', $id);
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
    global $modelo;
    $modelo = find('modelo', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $modelo;
    $modelo = remove('modelo', $id);

    header('location: index.php');
}

/*
*  function lista($coluna = null)
*   {
*      global $lista;
*     $lista = selectDistinct($coluna, 'modelo');
*   }
 */
