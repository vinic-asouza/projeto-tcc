<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Test Control - Life</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/vinola.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 60px;
        }
    </style>

    <!-- /links icones -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    
    <!-- /links datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <!-- Include Date Picker -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap-datepicker.css"/>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <img src="<?php echo BASEURL; ?>img/logo-branco.png" alt="logo" class="navbar-brand">
          <a href="<?php echo BASEURL; ?>index.php"  id="navbar" class="navbar-brand">Controle de Testes </a>
          <a href="<?php echo BASEURL; ?>#"  id="navbar" class="navbar-brand"> </a>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" id="navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bar-chart"></i> Dashboard <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>index.php">Saldos</a></li>
                    <li><a href="<?php echo BASEURL; ?>acompanhamento.php">Acompanhamento</a></li>
                    <li><a href="<?php echo BASEURL; ?>graficos.php">Gráficos</a></li>
                </ul>
            </li>       
            <li class="dropdown">
                <a href="#" id="navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-pencil"></i> Cadastros <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>modelos">Gerenciar Modelos de Equip</a></li>
                    <li><a href="<?php echo BASEURL; ?>funcionarios">Gerenciar Funcionarios</a></li>
                    <li><a href="<?php echo BASEURL; ?>equipamento">Gerenciar Equipamentos</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"  id="navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list-alt"></i> Devoluções<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>devolucao">Registros devoluções</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"  id="navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list-alt"></i> Testes<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>teste">Registros Testes</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"  id="navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="glyphicon glyphicon-wrench"></i> RMA <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>conserto">Gerenciar RMA</a></li>
                    <li><a href="<?php echo BASEURL; ?>empresas_rma">Empresas</a></li>
                </ul>
            </li>
          </ul>
          <div>
                <a href="<?php echo BASEURL; ?>#"  id="navbar" class="navbar-brand"> </a>
                <a href="#"  id="navbar" class="navbar-brand"><i class="fa fa-user"></i> Login </a>
          </div>
        </div>
      </div>
    </nav>

    <main>
    <style>
        body {
            padding-right: 30px;
            padding-left: 30px;
        }
    </style>
