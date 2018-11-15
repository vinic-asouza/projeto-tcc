<?php 
require_once 'config.php';
require_once DBAPI;
require_once 'functions.php';
require_once ABSPATH.'/Modelos/functions.php';
index();
contagemTotal();
?>

<?php include HEADER_TEMPLATE; ?>
<?php $db = open_database(); ?>

<h1>Dashboard / Graficos</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver analise Grafica.
	</div>

	<div class="col-xs-6 col-sm-3 col-md-6">
        Ambiente para desenvolver analise Grafica.
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>