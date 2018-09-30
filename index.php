<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
    require_once 'functions.php';
    require_once ABSPATH.'/Modelos/functions.php';

    index();

    contagemTotal();

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
				<?php if ($modelos) : ?>
				<?php foreach ($modelos as  $modelo) : ?>
				<tr>
					<td class ="text-center">
						<?php
                            echo $modelo['nome_equip'];
                        ?>
					</td>	
					<td class ="text-center">
						<?php
                            $cont_item = contagemItens('devolucao', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                            echo $cont_item;
                        ?>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="6">Nenhum registro encontrado.</td>
					</tr>
				<?php endif; ?>
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