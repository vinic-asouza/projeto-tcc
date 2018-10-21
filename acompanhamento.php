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

<h1>Dashboard / Acompanhamento</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div>
		<table class="table table-striped table-bordered">
		<h2 >Quantidades Totais</h2>
		<hr />
				<thead>
					<tr id="table_total">
						<th scope="col" class ="text-center">Data</th>
						<th scope="col" class ="text-center">Total Devoluções</th>
						<th scope="col" class ="text-center">Total Testes</th>
						<th scope="col" class ="text-center">Saldo Atual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class ="text-center">01/01/2018</td>
					</tr>
				</tbody>
		</table>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver acompanhamento.
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>