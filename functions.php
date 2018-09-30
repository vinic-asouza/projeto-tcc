<?php

require_once 'config.php';
require_once DBAPI;

function contagemTotal()
{
    global $cont_devolucao;
    $cont_devolucao = contagem('devolucao');
    global $cont_teste;
    $cont_teste = contagem('teste');
}
