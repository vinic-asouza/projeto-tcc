<?php
    require_once 'functions.php';
    index();
?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Equipamentos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Modelo</a>
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
			<th class ="text-center">Descrição</th>			
			<th class ="text-center">Marca</th>			
			<th class ="text-center">Modelo</th>
			<th class ="text-center">Atualizado em</th>
			<th class ="text-center">Detalhes</th>	
		</tr>
	</thead>
	<tbody>
		<?php if ($modelos) : ?>
		<?php foreach ($modelos as $modelo) : ?>
			<tr>
				<td class ="text-center"><?php echo $modelo['id']; ?></td>
				<td class ="text-center"><?php echo $modelo['nome_equip']; ?></td>
				<td class ="text-center"><?php echo $modelo['marca_equip']; ?></td>
				<td class ="text-center"><?php echo $modelo['modelo_equip']; ?></td>
				<td class ="text-center"><?php echo $modelo['modified']; ?></td>
				<td class="actions text-center">
					<a href="view.php?id=<?php echo $modelo['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detalhes</a>

					<!--<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $modelo['id']; ?>">
						<i class="fa fa-trash"></i> Excluir
					</a>-->
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