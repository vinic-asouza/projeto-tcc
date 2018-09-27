<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
    require_once 'functions.php';
    contagemTotal();
    contagemItem();

?>

<?php include HEADER_TEMPLATE; ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-3">
		<table class="table table-bordered">
		<h3>Quantidades totais</h3>
				<thead>
					<tr>
						<th scope="col">Total Devoluções</th>
						<th scope="col">Total Testes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $cont_devolucao; ?></td>
						<td><?php echo $cont_teste; ?></td>
					</tr>
				</tbody>
		</table>
		<table class="table table-bordered">
		<h3>Quantidades por modelos</h3>
			<thead>
				<tr>
					<th scope="col">Equipamento</th>
					<th scope="col">Total Devoluções</th>
					<th scope="col">Total Testes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Modelo 1</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 2</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 3</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 4</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 5</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 6</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 7</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 8</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 9</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<th scope="row">Modelo 10</th>
					<td><?php echo $cont_item; ?></td>
					<td>0</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<hr />

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver analise de dados e estatistica.
	</div>

	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver analise de dados e estatistica.
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>