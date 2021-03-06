<?php
    require_once 'functions.php';
    index();
?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Funcionarios</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Funcionario</a>
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
		<th class ="text-center">Nome</th>			
		<th class ="text-center">Setor</th>			
		<th class ="text-center">Atualizado em</th>
		<th class ="text-center">Detalhes</th>	
	</tr>
</thead>
<tbody>
<?php if ($funcionarios) : ?>
<?php foreach ($funcionarios as $funcionario) : ?>
	<tr>
		<td class ="text-center"><?php echo $funcionario['id']; ?></td>
		<td class ="text-center"><?php echo $funcionario['nome_funcionario']; ?></td>
		<td class ="text-center"><?php echo $funcionario['setor_func']; ?></td>
		<td class ="text-center"><?php echo $funcionario['modified']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $funcionario['id']; ?>"><i class="fa fa-eye"></i></a>
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