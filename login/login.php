<?php

require_once '../config.php';
require_once DBAPI;

  $login = $_POST['tela_login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $database = open_database();
    if (isset($entrar)) {
        $verifica = ('SELECT * FROM usuarios WHERE login = '.$login.' AND senha = '.$senha) or die('erro ao selecionar');
        if ($verifica->num_rows = 0) {
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='tela_login.php';</script>";
            die();
        } else {
            setcookie('login', $login);
            header('Location:index.php');
        }
    }
