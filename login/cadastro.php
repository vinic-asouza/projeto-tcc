<?php

require_once '../config.php';
require_once DBAPI;

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$database = open_database();
$sql = "SELECT login FROM usuarios WHERE login = '$login'";
$result = $database->query($sql);
$array = mysqli_fetch_array($result);
$logarray = $array['login'];

  if ($login == '' || $login == null) {
      echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
  } else {
      if ($logarray == $login) {
          echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
          die();
      } else {
          $sql = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
          $result = $database->query($sql);

          if ($result) {
              echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='tela_login.php'</script>";
          } else {
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
          }
      }
  }
