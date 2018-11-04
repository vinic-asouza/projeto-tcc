<?php

require_once 'config.php';
require_once DBAPI;
require_once ABSPATH.'/Modelos/functions.php';

index();

function contagemTotal()
{
    global $cont_devolucao;
    $cont_devolucao = contagem('devolucao');
    global $cont_teste;
    $cont_teste = contagem('teste');
    global $cont_rma;
    $cont_rma = contagem('conserto');
}

function contagemPorItem()
{
    foreach ($modelos as  $modelo) :
    $cont_itens_devolucao = contagemItens('devolucao', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
    $cont_itens_teste = contagemItens('teste', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
    endforeach;
}
