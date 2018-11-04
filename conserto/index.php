<?php
    require_once 'functions.php';
    indexConserto();
?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Gerenciamento de RMA</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Registrar RMA</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-striped" id="id_tabela">
<thead>
	<tr>
		<th class ="text-center">Código</th>			
		<th class ="text-center">Num. Nota</th>			
		<th class ="text-center">Quantidade</th>
		<th class ="text-center">Data Envio</th>
		<th class ="text-center">Previsão</th>
		<th class ="text-center">Empresa</th>
		<th class ="text-center">Cód. Modelo</th>
		<th class ="text-center">Equipamento</th>
		<th class ="text-center">Modelo</th>
		<th class ="text-center">Atualizado em</th>
		<th class ="text-center">Detalhes</th>	
	</tr>
</thead>
<tbody>
<?php if ($selectConsertos) : ?>
<?php foreach ($selectConsertos as $selectConserto) : ?>
	<tr>
		<td class ="text-center"><?php echo $selectConserto['id']; ?></td>
		<td><?php echo $selectConserto['num_nota']; ?></td>
		<td><?php echo $selectConserto['qntd']; ?></td>
		<td><?php echo $selectConserto['data_envio']; ?></td>
		<td><?php echo $selectConserto['previsao_chegada']; ?></td>
		<td><?php echo $selectConserto['nome_empresa']; ?></td>
		<td><?php echo $selectConserto['modelo_id']; ?></td>
		<td><?php echo $selectConserto['nome_equip']; ?></td>
		<td><?php echo $selectConserto['modelo_equip']; ?></td>
		<td class ="text-center"><?php echo $selectConserto['modified']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $selectConserto['id']; ?>"><i class="fa fa-eye"></i></a>
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

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>