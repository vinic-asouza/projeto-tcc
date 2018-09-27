<?php

require_once '../config.php';
require_once DBAPI;

$empresas = null;
$empresa = null;

/**
 *  Listagem de Clientes.
 */
function index()
{
    global $empresas;
    $empresas = find_all('empresa_conserto');
}

/**
 *  Cadastro de Clientes.
 */
function add()
{
    if (!empty($_POST['empresa_conserto'])) {
        $today =
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $empresa = $_POST['empresa_conserto'];
        $empresa['modified'] = $empresa['created'] = $today->format('Y-m-d H:i:s');

        save('empresa_conserto', $empresa);
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

        if (isset($_POST['empresa_conserto'])) {
            $empresa = $_POST['empresa_conserto'];
            $empresa['modified'] = $now->format('Y-m-d H:i:s');

            update('empresa_conserto', $id, $empresa);
            header('location: index.php');
        } else {
            global $empresa;
            $empresa = find('empresa_conserto', $id);
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
    global $empresa;
    $empresa = find('empresa_conserto', $id);
}

/**
 *  Exclusão de um Cliente.
 */
function delete($id = null)
{
    global $empresa;
    $empresa = remove('empresa_conserto', $id);

    header('location: index.php');
}
